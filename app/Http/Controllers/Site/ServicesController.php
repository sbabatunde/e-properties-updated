<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Models\Site\ServiceType;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function findServices()
    {
        return view('front.users.services.main-page');
    }

    public function getServiceType($slug)
    {
        try {
            $getType = ServiceType::where('service_category_slug',$slug)->get();
            return response()->json($getType);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
