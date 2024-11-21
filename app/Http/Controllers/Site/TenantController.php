<?php

namespace App\Http\Controllers\Site;

use App\Models\Site\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review\PropertyReview;

class TenantController extends Controller
{
    public function tenantIndex()
    {
        $data['groups'] = Group::withCount(['members', 'posts'])->get();
        $reviews = PropertyReview::with(['user','property'])->whereHas('user', function ($query) {
            $query->where('user_type', 'tenant');
        })->get();
        
        return view('front.users.tenant.index',compact('data','reviews'));
    }
}
