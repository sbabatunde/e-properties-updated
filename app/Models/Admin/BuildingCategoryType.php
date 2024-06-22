<?php

namespace App\Models\Admin;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildingCategoryType extends Model
{
    use HasFactory,Sluggable;

    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'type'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(BuildingCategory::class,'building_category_slug','slug');
    }


}
