<?php

namespace App\Models\Site;

use App\Models\User;
use App\Models\Auction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AuctionBid extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function auction()
    {
        return $this->belongsTo(Auction::class, 'auction_id', 'id');
    }

    public function bidder()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
