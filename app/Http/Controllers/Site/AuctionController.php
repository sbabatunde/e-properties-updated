<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Models\site\AuctionBid;
use App\Http\Controllers\Controller;
use App\Models\Auction;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuctionController extends Controller
{
    public function allAuctions()
    {
        $auctions = Auction::with('property')->orderBy('start_date', 'desc')->limit(6)->get();

        return view('front.users.liveAuction.all-auctions', compact('auctions'));
    }

    public function liveAuction()
    {
        $auctions = Auction::with('property')->orderBy('start_date', 'desc')->limit(6)->get();

        return view('front.users.liveAuction.main-page', compact('auctions'));
    }

    public function placeAuctionBid()
    {
        return view('front.users.liveAuction.bid.place');
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
