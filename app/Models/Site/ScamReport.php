<?php

namespace App\Models\site;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScamReport extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
}
