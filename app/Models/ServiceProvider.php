<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;

    protected $fillable = ['business_name', 'business_ID', 'user_id', 'service_type'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
