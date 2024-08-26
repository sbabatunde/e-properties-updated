<?php

namespace App\Models\Review;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfessionalReview extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function reviewer()
    {
        return $this->belongsTo(User::class);
    }

    public function professional()
    {
        return $this->belongsTo(User::class,'professional_id','id');
    }
}
