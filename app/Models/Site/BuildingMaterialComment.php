<?php

namespace App\Models\Site;

use App\Models\User;
use App\Models\Admin\BuildingMaterial;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BuildingMaterialComment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'building_material_comments';
    
    public function reviewer()
    {
        return $this->belongsTo(User::class);
    }

    public function material()
    {
        return $this->belongsTo(BuildingMaterial::class);
    }
}
