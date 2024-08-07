<?php

namespace App\Models\Site;

use App\Models\ServiceProvider;
use App\Models\User;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory,Sluggable;

    protected $guarded = [];

    public function providers()
    {
        return $this->hasManyThrough(User::class,ServiceProvider::class,'service_type_id','id','id','user_id');
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
