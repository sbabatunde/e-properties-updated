<?php

namespace App\Models\Compare;

use App\Models\Property as ModelsProperty;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'compare_properties';

    public function property()
    {
        return $this->belongsTo(ModelsProperty::class, 'property_id', 'id');
    }
}
