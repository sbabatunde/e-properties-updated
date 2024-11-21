<?php

namespace App\Models;

use App\Models\Site\GroupPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

   public function groupPost()
    {
        return $this->belongsTo(GroupPost::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);  // Each comment belongs to a user
    }

}
