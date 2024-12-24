<?php

namespace App\Models\Admin;

use App\Models\Property;
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
        return $this->belongsTo(User::class,'reporter_id','id');
    }

    public function reported()
    {
        return $this->belongsTo(User::class,'reported_id','id');
    }
   
    public function reportedProperty()
    {
        return $this->belongsTo(Property::class,'reported_id','id');
    }

    public function blacklister()
    {
        return $this->belongsTo(User::class,'blacklisted_by','id');
    }
}

