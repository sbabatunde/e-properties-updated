<?php

namespace App\Models;

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
    protected $fillable = [
        'agent_id',
        'deal',
        'title',
        'category',
        'furnishing',
        'type',
        'bathrooms',
        'toilets',
        'auction',
        'description',
        'state',
        'localty',
        'area',
        'street',
        'installment',
        'C_of_O',
        'survey_plan',
        'deed_of_ass',
        'grant_of_prob',
        'deed_of_mort',
        'deed_of_gift',
        'property_doc',
        'thumbnail',

    ];

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
}
