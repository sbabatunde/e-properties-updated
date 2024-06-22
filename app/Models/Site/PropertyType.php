<?php

namespace App\Models\Site;

use App\Models\Property;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory,Sluggable;

    public function propertyCategory()
    {
        return $this->belongsTo(PropertyCategory::class,'category_slug', 'category_slug');
    }

    public function property()
    {
        return $this->hasMany(Property::class,'type_id','id');
    }

    public function sluggable(): array
    {
        return [
            'property_type_slug' => [
                'source' => 'property_type'
            ]
        ];
    }
}
