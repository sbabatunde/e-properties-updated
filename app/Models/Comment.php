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

    // Relationship to the parent comment
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    // Relationship to child comments
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);  // Each comment belongs to a user
    }

      // Each comment can have multiple likes
      public function likes()
      {
          return $this->hasMany(PostLike::class, 'comment_id');
      }
}
