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
        $bidProperty = Auction::with(['property'])->where('property_id',$id)->first();
        // dd($bidProperty);
        return view('front.users.liveAuction.bid.place',compact('bidProperty'));
    }

    public function placeAuctionBidAmount(Request $request)
    {
        $amount = $request->amount;
        //to remove first 5 characters of the string
        $new_amount = substr($amount, 5);
        //remove comma from string
        $non_comma = str_replace(',', '', $new_amount);
        $amount = (float)$non_comma;
        $auctions = Auction::with(['property', 'auctionBid'])->get();
        dd($auctions);
        $bid = AuctionBid::create([
            'auction_id' => $request->auction_id,
            'user_id' => Auth::id(),
            'bid_amount' => $request->bid_amount,
        ]);
        Alert::success('message', 'Your Bid has been recorded successfully');

        return back();
    }
}
