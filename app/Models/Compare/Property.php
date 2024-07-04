<?php

namespace App\Models\Compare;

use App\Models\Property as ModelsProperty;
use App\Models\PropertyPayment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'compare_property';

    public function property()
    {
        return $this->belongsTo(ModelsProperty::class);
    }

    public function payment()
    {
        return  $this->belongsTo(PropertyPayment::class, 'property_id', 'property_id');
    }
}
