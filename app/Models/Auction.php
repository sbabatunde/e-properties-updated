<?php

namespace App\Models;

use App\Models\site\AuctionBid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function property()
    {
        return  $this->belongsTo(Property::class, 'property_id', 'id');
    }

    public function auctionBid()
    {
        return $this->hasMany(AuctionBid::class);
    }
}
