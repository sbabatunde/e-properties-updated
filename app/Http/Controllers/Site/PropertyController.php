<?php

namespace App\Http\Controllers\Site;

use Carbon\Carbon;
use App\Models\City;
use App\Models\User;
use App\Models\Auction;
use App\Models\Category;
use App\Models\Property;
use Jorenvh\Share\Share;
use App\Models\site\Message;
use Illuminate\Http\Request;
use App\Models\PropertyPayment;
use App\Mail\Properties\Prospect;
use App\Models\PropertyAmenities;
use App\Models\Site\PropertyType;
use App\Http\Controllers\Controller;
use App\Models\Image as SliderImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManager;
use App\Models\Review\PropertyReview;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Interactions\PropertyLikes;
use App\Models\Interactions\PropertyViews;
use App\Http\Requests\PropertyMessageRequest;
use Intervention\Image\Laravel\Facades\Image;

class PropertyController extends Controller
{
    public function propertyById($id)
    {
        $data = [];
        $data['property'] = Property::with(['amenities','agent', 'payment', 'auction'])->where('properties.id', $id)->first(); 
        $data['similarProperties']=Property::with(['amenities','agent', 'payment', 'auction'])
        ->where('type_id', $data['property']->type_id)->take(4)->get();
        if(Auth::check()){
            $data['user']= User::where('id',Auth::id())->first();
            $user_id = Auth::id();
        }
        else{
            $user_id = null;
        }
        // $exist = PropertyViews::where('property_id',$id)->where('user_id',Auth::id())->first();
        // if(!$exist)
        // {
            $updateViews = PropertyViews::create([
                'user_id'=>$user_id,
                'property_id'=>$id,
            ]);
        // }

        $data['reviews'] =  PropertyReview::where('property_id',$id)->orderBy('id','desc')->get();

        return view('front.users.properties.home.properties-details', $data);
    }

    public function propertyMessage(PropertyMessageRequest $request,$prop_id,$agent_id)
    {
        
        if (Auth::check()) {
            $message = Message::insert([
                'user_id' => Auth::user()->id,
                'agent_id' => $agent_id,
                'property_id' =>  $prop_id,
                'msg_name' => $request->name,
                'msg_email' => $request->email,
                'msg_phone' => $request->phone,
                'message' => $request->message,
                'created_at' => Carbon::now(),
            ]);

           
            $agent = User::where('id',$message['agent_id'])->first();
            $property = Property::where('id',$message['property_id'])->first();
            $agentEmail = $agent->email;
            $to = [$agentEmail];
            $cc = ['admin@eproperties.ng'];
            $details = [
                "name" =>  $message['msg_name'],
                "contact" => $message['msg_phone'],
                "userEmail" =>  $message['msg_email'],
                "message" =>  $message['message'],
                "property"=> $property['title'],
                "property_code"=> $property['property_code'],
                'agent'=>$agent->firstname.''.$agent->lastname,
            ];

            Mail::to($to)
                ->bcc($cc)
                // ->bcc($bcc)
                ->send(new Prospect($details));

            Alert::success('Success', 'Message sent successfully.');

            return redirect()->back();
        } else {
            Alert::Info('Info', 'Please login with your account first.');

            return back();
        }
    }

    public function propertyReview(Request $request, $id)
    {
        if(auth::id())
        {
            $user_id = auth::id();
        }
        else{
            $user_id = null;
        }
        
        $review = PropertyReview::create([
            'user_id'=> $user_id,
            'property_id'=> $id,
            'review'=>$request->input('review'),
        ]);

        Alert::info('Success','Your Property review has been recorded.');

        return back();
    }

    public function propertyCategory($category_slug)
    {
        $salesProperties = Property::with(['type','payment'])
        ->whereHas('type', function($q) use($category_slug){
            $q->where('category_slug',$category_slug);
        })->where('status','Sale')->paginate(6);
        $letProperties = Property::with(['type','payment'])
        ->whereHas('type', function($q) use($category_slug){
            $q->where('category_slug',$category_slug);
        })->where('status','Let')->paginate(6);
        $rentProperties = Property::with(['type','payment'])
        ->whereHas('type', function($q) use($category_slug){
            $q->where('category_slug',$category_slug);
        })->where('status','Rent')->paginate(6);
        $liveAuction = Auction::with(['property'])->whereDate('start_date','<=',Carbon::today())
        ->whereDate('end_date','>=',Carbon::today())->get();

        $similarProperties  = Property::with(['type','payment'])->take('3')->get();
        // dd($similarProperties);
        return view('front.users.properties.commercial.main-page',compact('salesProperties','letProperties'
        ,'rentProperties','liveAuction','similarProperties'))->withViewName('vendor.pagination.custom');
    }

    public function commercialProperty($category_slug)
    {
        // data for form
        $data['minPrice'] = PropertyPayment::orderBy('initial_pay','asc')->get(['initial_pay','initial_denomination'])
            ->unique('initial_pay')->take(4);
        $data['maxPrice'] = PropertyPayment::orderBy('initial_pay','desc')->get(['initial_pay','initial_denomination'])
            ->unique('initial_pay')->take(4);
        $data['minBedroom'] = Property::orderBy('bedrooms','asc')->get(['bedrooms'])
            ->unique('bedrooms')->take(4);
        $data['maxBedroom'] = Property::orderBy('bedrooms','desc')->get(['bedrooms'])
            ->unique('bedrooms')->take(4);
        $data['localty'] = Property::orderBy('localty','desc')->get(['localty'])->unique('localty');
        $data['type'] = PropertyType::with(['property','propertyCategory'])->get();
        $data['localty'] = Property::orderBy('localty','desc')->get(['localty'])->unique('localty');
        // /end form data

        $salesProperties = Property::with(['type','payment'])->where('status','Sale')->paginate(6);
        $letProperties = Property::with(['type','payment'])->where('status','Let')->paginate(6);
        $rentProperties = Property::with(['type','payment'])->where('status','Rent')->paginate(6);
        $liveAuction = Auction::with(['property'])->whereDate('start_date','<=',Carbon::today())
        ->whereDate('end_date','>=',Carbon::today())->get();
        // dd($liveAuction);
        return view('front.users.properties.commercial.main-page',compact('salesProperties','letProperties'
        ,'rentProperties','liveAuction','data'))->withViewName('vendor.pagination.custom');
    }

    // public function propertySearch(Request $request)
    // {
    //     // Retrieve search parameters from the request
    //     $keyword = $request->input('keyword');
    //     $area = $request->input('area');
    //     $minPrice = $request->input('min_price');
    //     $maxPrice = $request->input('max_price');
    //     $minBedroom = $request->input('min_bedroom');
    //     $maxBedroom = $request->input('max_bedroom');
    //     $furnished = $request->input('furnished');
    //     $propertyType = $request->input('p_type');
    //     $searchType = $request->input('type');

    //     // Build the query
    //     $query = Property::query()
    //         ->select('properties.*')
    //         ->leftJoin('property_payments as prices', 'properties.id', '=', 'prices.property_id');
    //         // ->groupBy('properties.id'); // Group by property to avoid duplicate results

    //     // Apply filters if they are provided
    //     if (!empty($keyword)) {
    //         $query->where('properties.title', 'like', '%' . $keyword . '%');
    //     }
    //     // dd($query->get());

    //     if (!empty($area)) {
    //         $query->where('properties.localty', $area);

    //     }
    //     if (!empty($minPrice)) {
    //         $query->where('prices.initial_pay', '>=', $minPrice);

    //     }
    //     if (!empty($maxPrice)) {
    //         $query->where('prices.initial_pay', '<=', $maxPrice);

    //     }
    //     if (!empty($minBedroom)) {
    //         $query->where('properties.bedrooms', '>=', $minBedroom);

    //     }
    //     if (!empty($maxBedroom)) {
    //         $query->where('properties.bedrooms', '<=', $maxBedroom);
    //     }
    //     if (!empty($furnished)) {
    //         $query->where('properties.furnishing', $furnished);
    //     }
    //     if (!empty($propertyType)) {
    //         $query->where('properties.type_id', $propertyType);
    //     }
    //     if (!empty($searchType)) {
    //         $query->where('properties.status', $searchType);
    //     }

    //     // Execute the query and get the results
    //     $data = $properties = $query->paginate();
    //     // Return the view with the results
    //     // dd($properties);
       

    //     return view('front.users.properties.search',compact('properties'))->withViewName('vendor.pagination.custom');
    // }

    public function propertySearch(Request $request)
    {
        // Retrieve search parameters from the request
        $keyword = $request->input('keyword');
        $area = $request->input('area');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        $minBedroom = $request->input('min_bedroom');
        $maxBedroom = $request->input('max_bedroom');
        $furnished = $request->input('furnished');
        $propertyType = $request->input('p_type');
        $searchType = $request->input('type');

        // Build the base query
        $query = Property::query()
            ->select('properties.*')
            ->leftJoin('property_payments as prices', 'properties.id', '=', 'prices.property_id');

        // Apply filters
        if (!empty($keyword)) {
            $query->where('properties.title', 'like', '%' . $keyword . '%');
        }
        if (!empty($area)) {
            $query->where('properties.localty', $area);
        }
        if (!empty($minPrice)) {
            $query->where('prices.initial_pay', '>=', $minPrice);
        }
        if (!empty($maxPrice)) {
            $query->where('prices.initial_pay', '<=', $maxPrice);
        }
        if (!empty($minBedroom)) {
            $query->where('properties.bedrooms', '>=', $minBedroom);
        }
        if (!empty($maxBedroom)) {
            $query->where('properties.bedrooms', '<=', $maxBedroom);
        }
        if (!empty($furnished)) {
            $query->where('properties.furnishing', $furnished);
        }
        if (!empty($propertyType)) {
            $query->where('properties.type_id', $propertyType);
        }
        if (!empty($searchType)) {
            $query->where('properties.status', $searchType);
        }

        // Execute the main search query
        $properties = $query->paginate();

        // Group properties by status
        $salesProperties = $this->getPropertiesByStatus('Sale', $request);
        $letProperties = $this->getPropertiesByStatus('Let', $request);
        $rentProperties = $this->getPropertiesByStatus('Rent', $request);

        // Get live auctions
        $liveAuction = Auction::with(['property'])
            ->whereDate('start_date', '<=', Carbon::today())
            ->whereDate('end_date', '>=', Carbon::today())
            ->get();

        // Get similar properties
        $similarProperties = Property::with(['type', 'payment'])->take(3)->get();

        // data for form
        $data['minPrice'] = PropertyPayment::orderBy('initial_pay','asc')->get(['initial_pay','initial_denomination'])
            ->unique('initial_pay')->take(4);
        $data['maxPrice'] = PropertyPayment::orderBy('initial_pay','desc')->get(['initial_pay','initial_denomination'])
            ->unique('initial_pay')->take(4);
        $data['minBedroom'] = Property::orderBy('bedrooms','asc')->get(['bedrooms'])
            ->unique('bedrooms')->take(4);
        $data['maxBedroom'] = Property::orderBy('bedrooms','desc')->get(['bedrooms'])
            ->unique('bedrooms')->take(4);
        $data['localty'] = Property::orderBy('localty','desc')->get(['localty'])->unique('localty');
        $data['type'] = PropertyType::with(['property','propertyCategory'])->get();
        $data['localty'] = Property::orderBy('localty','desc')->get(['localty'])->unique('localty');
        // /end form data

        // Return the view
        return view('front.users.properties.search', compact('properties', 'salesProperties', 'letProperties',
        'rentProperties', 'liveAuction', 'similarProperties','data'))
            ->withViewName('vendor.pagination.custom');
    }

    private function getPropertiesByStatus($status, Request $request)
    {
        $query = Property::with(['type', 'payment'])
            ->where('status', $status);

        // Apply any additional filters if needed (you can pass filters to this method)
        if ($request->filled('keyword')) {
            $query->where('title', 'like', '%' . $request->input('keyword') . '%');
        }
        if ($request->filled('area')) {
            $query->where('localty', $request->input('area'));
        }
        if ($request->filled('min_price')) {
            $query->whereHas('payment', function($q) use ($request) {
                $q->where('initial_pay', '>=', $request->input('min_price'));
            });
        }
        if ($request->filled('max_price')) {
            $query->whereHas('payment', function($q) use ($request) {
                $q->where('initial_pay', '<=', $request->input('max_price'));
            });
        }
        if ($request->filled('min_bedroom')) {
            $query->where('bedrooms', '>=', $request->input('min_bedroom'));
        }
        if ($request->filled('max_bedroom')) {
            $query->where('bedrooms', '<=', $request->input('max_bedroom'));
        }
        if ($request->filled('furnished')) {
            $query->where('furnishing', $request->input('furnished'));
        }
        if ($request->filled('p_type')) {
            $query->where('type_id', $request->input('p_type'));
        }

        return $query->paginate(6);
    }

    public function allPropertyListings()
    { 
        // data for form
        $data['minPrice'] = PropertyPayment::orderBy('initial_pay','asc')->get(['initial_pay','initial_denomination'])
            ->unique('initial_pay')->take(4);
        $data['maxPrice'] = PropertyPayment::orderBy('initial_pay','desc')->get(['initial_pay','initial_denomination'])
            ->unique('initial_pay')->take(4);
        $data['minBedroom'] = Property::orderBy('bedrooms','asc')->get(['bedrooms'])
            ->unique('bedrooms')->take(4);
        $data['maxBedroom'] = Property::orderBy('bedrooms','desc')->get(['bedrooms'])
            ->unique('bedrooms')->take(4);
        $data['localty'] = Property::orderBy('localty','desc')->get(['localty'])->unique('localty');
        $data['type'] = PropertyType::with(['property','propertyCategory'])->get();
        $data['localty'] = Property::orderBy('localty','desc')->get(['localty'])->unique('localty');
        // /end form data

        $salesProperties = Property::with(['type','payment'])->where('status','Sale')->orderBy('created_at','desc')->paginate(6);
        $rentProperties = Property::with(['type','payment'])->where('status','Rent')->orderBy('created_at','desc')->paginate(6);
        $letProperties = Property::with(['type','payment'])->where('status','Let')->orderBy('created_at','desc')->paginate(6);
        $liveAuction = Auction::with(['property'])->whereDate('start_date','<=',Carbon::today())
        ->whereDate('end_date','>=',Carbon::today())->get();

        $similarProperties  = Property::with(['type','payment'])->orderBy('created_at','desc')->take('3')->get();

        return view('front.users.properties.commercial.main-page',compact('salesProperties','letProperties'
        ,'rentProperties','liveAuction','similarProperties','data'))->withViewName('vendor.pagination.custom');
    }

    public function propertyLikes(Request $request,$id)
    {
        if(Auth::check())
        {
            // Check if a record already exists with the given property_id in Trending table
            $likes = PropertyLikes::where('user_id', Auth::id())->where('property_id',$id)->first();
            
            // Example: Process the ID and return a JSON response
            if (!$likes)
            {
                // Create a new record in Trending table if none exists
                $trending = PropertyLikes::create([
                    'property_id' => $id,
                    'user_id' => Auth::id(),
                ]);

                $response = [
                    'success' => 'Property Added to Favourites!',
                    // Any additional data you want to return
                    ];
            }
            else{
                $response = [
                    'error' => 'Property is already in Favourites!',
                    // Any additional data you want to return
                    ];
            }

            return response()->json($response); // Return JSON response
        }
        else {
            // User is not authenticated
            return response()->json(['error' => 'Unauthorized access, Login First']);
        }
    }

    public function propertyShare($id)
    {
        
        // return redirect()->back(); // Redirect after submission
    }
}
