<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyCategory extends Model
{
    use HasFactory, Sluggable;
    
    protected $guarded = [];
    
    public function propertyType()
    {
        return $this->hasMany(PropertyType::class);
    }

    public function sluggable(): array
    {
        return [
            'category_slug' => [
                'source' => 'category_name'
            ]
        ];
    }
}
