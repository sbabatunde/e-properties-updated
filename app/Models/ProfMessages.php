<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfMessages extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function agent()
    {
        return $this->belongsTo(User::class, 'agent_id', 'id');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

