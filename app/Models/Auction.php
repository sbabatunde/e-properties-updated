<?php

namespace App\Models;

use App\Models\Site\AuctionBid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function property()
    {
        return  $this->belongsTo(Property::class);
    }

    public function auctionBid()
    {
        return $this->hasMany(AuctionBid::class);
    }

    public function amenities()
    {
        return $this->hasMany(PropertyAmenities::class,'property_id','property_id');
    }

    // public function propertytype()
    // {
    //     return $this->hasMany(PropertyAmenities::class,'property_id','property_id');
    // }
}
