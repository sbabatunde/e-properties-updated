<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blacklist extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'blacklists';

    public function reporter()
    {
        return $this->belongsTo(User::class,'id','reporter_id');
    }

    public function reported()
    {
        return $this->belongsTo(User::class,'id','reported_id');
    }

    public function blacklister()
    {
        return $this->belongsTo(User::class,'id','blacklisted_by');
    }
}

