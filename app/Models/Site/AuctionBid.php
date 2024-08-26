<?php

namespace App\Models\Site;

use App\Models\Auction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionBid extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function auction()
    {
        return $this->belongsTo(Auction::class, 'auction_id', 'id');
    }
}
