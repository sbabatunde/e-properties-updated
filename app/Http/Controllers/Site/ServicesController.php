<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use Jorenvh\Share\Share;
use Illuminate\Http\Request;
use App\Models\Site\ServiceType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Review\ProfessionalReview;
use App\Models\Interactions\ProfessionalViews;

class ServicesController extends Controller
{
    public function findServices()
    {

        $proffessionals = ServiceType::withCount(['providers'])
        ->with('serviceCategory')
        ->whereDoesntHave('serviceCategory', function ($query) {
            $query->where('category', 'Maintenance');
        }) ->inRandomOrder() // This will randomize the order
        ->get();
        $maintenance = ServiceType::with(['serviceCategory','providers'])->whereHas('serviceCategory',
        function($q){$q->where('category','Maintenance');})->get();
        $building_dev = ServiceType::with(['serviceCategory','providers'])->whereHas('serviceCategory',
        function($q){$q->where('category','Building Development');})->get();
        $legal = ServiceType::with(['serviceCategory','providers'])->whereHas('serviceCategory',
        function($q){$q->where('category','Legal');})->get();
        $property = ServiceType::with(['serviceCategory','providers'])->whereHas('serviceCategory',
        function($q){$q->where('category','Property');})->get();
        
        return view('front.users.services.main-page',compact('maintenance','building_dev','legal','property','proffessionals'));
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
        $proffessionals = ServiceType::withCount(['providers'])
        ->with(['serviceCategory'])->whereHas('providers')
        ->whereDoesntHave('serviceCategory', function ($query) {
            $query->where('category', 'Maintenance');
        }) ->inRandomOrder() // This will randomize the order
        ->get();

        $title = $providers->value('service') ;
        
        return view('front.users.services.providers.all',compact('providers','title','proffessionals'));
    }

    public function viewServiceProviders($id)
    {
      
        $selectedProvider = User::where('id',$id)->with(['serviceProviders','serviceTypes'])->first();
        $service = $selectedProvider->serviceTypes()->where('service_providers.user_id', $id)->value('service');
        // Get the selected provider by ID
        $otherProviders = ServiceType::with(['serviceCategory', 'providers'])
                    ->select('service','image', 'id', 'service_category_slug','slug') // Ensure you're selecting the necessary fields
                    ->withCount('providers') // Count providers for each service type
                    ->get()
                    ->groupBy('service'); // Group by the 'service' attribute
                     // Generate the profile URL
                    //  dd($otherProviders);
        $profileUrl = route('service.provider.view', ['id' => $id]);
        // Create share links
        $share = new Share;
        $shareLinks = $share->page($profileUrl, $selectedProvider->name)
                            ->facebook()
                            ->twitter()
                            ->linkedin()
                            ->telegram()
                            ->whatsapp()        
                            ->reddit()
                            ->getRawLinks();

            if(Auth::check()){
                $data['user']= User::where('id',Auth::id())->first();
                $user_id = Auth::id();
            }
            else{
                $user_id = null;
            }
       
            $updateViews = ProfessionalViews::create([
                'user_id'=>$user_id,
                'professional_id'=>$id,
            ]);

        $reviews =  ProfessionalReview::where('professional_id',$id)->orderBy('id','desc')->get();
        return view('front.users.services.providers.view',compact('selectedProvider','otherProviders','service', 'shareLinks','reviews'));
    }

}
