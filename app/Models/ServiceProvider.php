<?php

namespace App\Models;

use App\Models\Site\ServiceCategory;
use App\Models\Site\ServiceType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;

    protected $fillable = ['business_name', 'business_ID', 'user_id', 'service_type_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class,'service_type_id','id');
    }
    
}
