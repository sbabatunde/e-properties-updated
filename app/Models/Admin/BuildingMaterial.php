<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BuildingMaterial extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->belongsTo(BuildingCategoryType::class,'type','slug');
    }

    // public function category()
    // {
    //     // Access the Building Category model through the Building Category Type model
    //     return $this->hasOneThrough(
    //         BuildingCategory::class,        // The model we want to access
    //         BuildingCategoryType::class,    // The intermediate model
    //         'building_category_slug',       // Foreign key on the intermediate model table
    //         'slug',                           // Foreign key on the model we want to access table
    //         'slug',                      // Local key on the intermediate model table
    //         'type'                    // Local key on the current model table
    //     );
    // }

  

}
