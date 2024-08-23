<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMedia extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'media';


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
