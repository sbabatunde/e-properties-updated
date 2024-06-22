<?php

namespace App\Models;

use App\Models\Site\PropertyType;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{

    use HasFactory;
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'auction' => 'No',
        'survey_plan' => 'No',
        'deed_of_ass' => 'No',
        'installment' => 'No',
        'grant_of_prob' => 'No',
        'deed_of_mort' => 'No',
        'deed_of_gift' => 'No',
        'property_doc' => 'No',
    ];


    public function city()
    {
        return $this->belongsTo(City::class)->withDefault();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'property_categories');
    }


    public function amenities()
    {
        return $this->hasMany(PropertyAmenities::class);
    }

    public function payment()
    {
        return $this->hasMany(PropertyPayment::class);
    }

    public function auction()
    {
        return $this->hasMany(Auction::class);
    }

    public function type()
    {
        return $this->belongsTo(PropertyType::class,'id','type_id');
    }
}
