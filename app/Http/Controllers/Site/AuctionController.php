<?php

namespace App\Http\Controllers\Site;

use Carbon\Carbon;
use App\Models\Auction;
use Illuminate\Http\Request;
use App\Models\site\AuctionBid;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuctionController extends Controller
{
    public function allAuctions()
    {
        $liveAuction = Auction::with(['property'])->whereDate('start_date','<=',Carbon::today())
        ->whereDate('end_date','>=',Carbon::today())->limit(6)->get();
        $upcomingAuctions = Auction::with(['property'])->whereDate('start_date','>=',Carbon::today())
        ->limit(6)->get();
        return view('front.users.liveAuction.all-auctions', compact('liveAuction','upcomingAuctions'));
    }

    public function liveAuction()
    {
        $liveAuction = Auction::with(['property'])->whereDate('start_date','<=',Carbon::today())
        ->whereDate('end_date','>=',Carbon::today())->limit(6)->orderBy('start_date','asc')->get();

        $upcomingAuctions = Auction::with(['property'])->orderBy('start_date','asc')
        ->whereDate('start_date','>=',Carbon::today())->limit(6)->get();
        // dd(Auction::all());
        return view('front.users.liveAuction.main-page', compact('liveAuction','upcomingAuctions'));
    }

    public function placeAuctionBid($id)
    {
        $bidProperty = Auction::with(['property','amenities','auctionBid'])->where('property_id',$id)->first();
        $counts = AuctionBid::where('auction_id',$bidProperty->id)->count();
        $highestBid = AuctionBid::where('auction_id',$bidProperty->id)->max('bid_amount');
        $myHighestBid = AuctionBid::where('auction_id',$bidProperty->id)->where('user_id',Auth::id())->max('bid_amount');
        if($myHighestBid < $highestBid)
        {
            $outBid = "Yes";
        }else{
            $outBid = "No";
        }

        return view('front.users.liveAuction.bid.place',compact('bidProperty','highestBid','counts','outBid'));
    }

    public function placeAuctionBidAmount(Request $request,$auctionID)
    {
        if (Auth::id()){
            $amount = $request->amount;
            //to remove first 5 characters of the string
            $new_amount = substr($amount, 5);
            //remove comma from string
            $non_comma = str_replace(',', '', $new_amount);
            $amount = (float)$non_comma;
            // Alert::error('message', $validate->messages()->all()[0]);

            $highestBid = AuctionBid::where('auction_id',$auctionID)->max('bid_amount');
            $numberHighestBid = number_format($highestBid);
            $numCurrentBid = number_format($amount);
            if($highestBid>$amount){
                Alert::error('Error!!!', "Your bid: ".$numCurrentBid.', is lesser than the current highest bid: '. $numberHighestBid);
                return back();
            }
            else{
                $userBidExists = AuctionBid::where('auction_id',$auctionID)->where('user_id', Auth::id())->first();
                if(!empty($userBidExists)){
                    $updateUserBid = AuctionBid::where('auction_id',$auctionID)->where('user_id', Auth::id())->update([
                        'bid_amount' => $amount,
                    ]);
                }
                else{
                    $bid = AuctionBid::create([
                        'auction_id' => $auctionID,
                        'user_id' => Auth::id(),
                        'bid_amount' => $amount,
                    ]);
                }
                
                Alert::success('message', 'Your Bid has been recorded successfully');
            }
            return back();
        }  else {
            Alert::error('Access Denied!!!', 'You need to login in first');
            return redirect()->route('user.login');
        }
        
    }
}
