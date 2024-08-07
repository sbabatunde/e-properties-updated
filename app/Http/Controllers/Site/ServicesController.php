<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Models\Site\ServiceType;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function findServices()
    {
        $maintenance = ServiceType::with(['serviceCategory','providers'])->whereHas('serviceCategory',
        function($q){$q->where('category','Maintenance');})->get();

        $building_dev = ServiceType::with(['serviceCategory','providers'])->whereHas('serviceCategory',
        function($q){$q->where('category','Building Development');})->get();

        $legal = ServiceType::with(['serviceCategory','providers'])->whereHas('serviceCategory',
        function($q){$q->where('category','Legal');})->get();

        $property = ServiceType::with(['serviceCategory','providers'])->whereHas('serviceCategory',
        function($q){$q->where('category','Property');})->get();
        
        // dd($property);
        return view('front.users.services.main-page',compact('maintenance','building_dev','legal','property'));
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

    public function allServiceProviders($slug)
    {
        $providers = ServiceType::with(['serviceCategory','providers'])->where('slug',$slug)->paginate(10);

        $title = $providers->value('service') ;
        return view('front.users.services.providers.all',compact('providers','title'));
    }

    public function viewServiceProviders($id)
    {
        // $provider = User::(['provi'])->first();

        return view('front.users.services.providers.view');
    }

}
