<?php

namespace App\Models\site;

use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }

    public function agent()
    {
        return $this->belongsTo(User::class, 'agent_id', 'id');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
