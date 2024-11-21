<?php

namespace App\Models\Site;

use App\Models\User;
use App\Models\Comment;
use App\Models\Site\GroupPost;
use App\Models\Site\GroupMember;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function members()
    {
        return $this->belongsToMany(User::class, 'group_members', 'group_id', 'user_id');
    }

    public function posts()
    {
        return $this->hasManyThrough(GroupPost::class, GroupMember::class, 'group_id', 'user_id', 'id', 'user_id');
    }

    public function comments()
    {
        return $this->hasManyThrough(Comment::class, GroupPost::class); // A group has many comments through posts
    }

}
