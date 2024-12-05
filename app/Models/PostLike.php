<?php

namespace App\Models;

use App\Models\Site\GroupPost;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    use HasFactory;
    
    protected $table = 'post_likes';
    protected $guarded = [];

    
    // Define the relationship to the user who liked
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship to the post (optional)
    public function post()
    {
        return $this->belongsTo(GroupPost::class);
    }

    // Define the relationship to the comment (optional)
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
    
}
