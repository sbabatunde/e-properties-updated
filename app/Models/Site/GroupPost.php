<?php

namespace App\Models\Site;

use App\Models\User;
use App\Models\Comment;
use App\Models\PostLike;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroupPost extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function group()
    {
        return $this->belongsTo(Group::class);  // Each post belongs to a group
    }

    
    // Each post can have multiple likes
    public function likes()
    {
        return $this->hasMany(PostLike::class, 'group_post_id');
    }

}
