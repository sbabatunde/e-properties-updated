<?php

namespace App\Models\Site;

use App\Models\ServiceProvider;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory,Sluggable;

    protected $guarded = [];

    public function providers()
    {
        return $this->hasMany(ServiceProvider::class);
    }

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class,'service_category_slug','slug');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'service'
            ]
        ];
    }

}
