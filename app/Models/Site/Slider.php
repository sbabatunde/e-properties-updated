<?php

namespace App\Models\site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = ['photo', 'created_at', 'updated_at'];

    public function getPhotoAttribute($val)
    {
        return $val ? asset('assets/admin/images/sliders/' . $val) : '';
    }
}
