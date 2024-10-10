<?php

namespace App\Http\Controllers\Site;

use Exception;
use App\Models\User;
use App\Models\Agent;
use Jorenvh\Share\Share;
use App\Models\ProfMessages;
use Illuminate\Http\Request;
use App\Models\Site\ServiceType;
use App\Http\Controllers\Controller;
use App\Mail\Properties\ProfMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Review\ProfessionalReview;
use Illuminate\Support\Facades\Validator;
use App\Models\Interactions\ProfessionalViews;

class PropertyProfessionalController extends Controller
{
    // public function allPropertyProfessionals()
    // {
    //     $propertyProfessionals = User::with(['agent','landlord','providers'])
    //     ->where('user_type','<>','tenant')->where('user_type','<>','admin')->orderBy('firstname','asc')->get();

    //     return view('front.users.property-professionals.all', compact('propertyProfessionals','serviceTypes'));
    // } 

    public function allPropertyProfessionals(Request $request)
    {
        // Retrieve all service types with counts
        $serviceTypes = ServiceType::withCount(['providers'])
            ->with('serviceCategory')
            ->whereDoesntHave('serviceCategory', function ($query) {
                $query->where('category', 'Maintenance');
            })->get();

        // Get the selected service type ID from the request
        $selectedServiceTypeId = $request->input('service_type');

        // Fetch property professionals based on selected service type
        // If no service type is selected, retrieve all professionals
        $propertyProfessionals = User::with('providers')
        ->when($selectedServiceTypeId, function ($query) use ($selectedServiceTypeId) {
            return $query->whereHas('providers', function ($query) use ($selectedServiceTypeId) {
                $query->where('service_type_id', $selectedServiceTypeId);
            });
        })
        ->paginate(6);
    

        return view('front.users.property-professionals.all', [
            'propertyProfessionals' => $propertyProfessionals,
            'serviceTypes' => $serviceTypes,
            'selectedServiceTypeId' => $selectedServiceTypeId,
        ]);
    }


    public function viewPropertyProfessionals(Request $request, $id)
    {
        $propertyProfessional = User::with(['property', 'providers','providers.serviceType'])->findOrFail($id);

        // Generate the profile URL
        $profileUrl = route('property.professionals.view', ['id' => $id]);

        // Create share links
        $share = new Share;
        $shareLinks = $share->page($profileUrl, $propertyProfessional->name)
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
        // $exist = ProfessionalViews::where('professional_id',$id)->where('user_id',Auth::id())->first();
        // if(!$exist)
        // {
            $updateViews = ProfessionalViews::create([
                'user_id'=>$user_id,
                'professional_id'=>$id,
            ]);
        // }

        $reviews =  ProfessionalReview::where('professional_id',$id)->orderBy('id','desc')->get();

        $similarProfs = User::with(['property',])
                            ->where('user_type', $propertyProfessional->user_type)
                            ->where('users.id', '<>', $propertyProfessional->id)
                            ->take(4)
                            ->get();

        return view('front.users.agents.connect', compact('propertyProfessional', 'similarProfs', 'shareLinks','reviews'));
    }

    public function messagePropertyProfessional(Request $request, $id)
    {
        try{
            if(auth::check())
            {
                $validate = Validator::make($request->all(),[
                    'name' => 'required|string',
                    'email' => 'required|email',
                    'phone' => 'required',
                    'message' => 'required|string',
                ]);
                $message  = ProfMessages::create([
                    "user_id"=> auth::id(),
                    "agent_id"=> $id,
                    "msg_name"=> $request->name,
                    "msg_email"=> $request->email,
                    "msg_phone"=> $request->phone,
                    "message"=> $request->message,
                    "status"=>'unread'
                ]);

                $agent = User::where('id',$message['agent_id'])->first();
                $agentEmail = $agent->email;
                
                $to = [$agentEmail];
                $cc = ['admin@eproperties.ng'];

                $details = [
                    "name" =>  $message['msg_name'],
                    "contact" => $message['msg_phone'],
                    "userEmail" =>  $message['msg_email'],
                    "message" =>  $message['message'],
                    "agent"=> $agent->firstname.' '.$agent->lastname,
                ];

                Mail::to($to)
                    ->bcc($cc)
                    // ->bcc($bcc)
                    ->send(new ProfMessage($details));
    
                Alert::success('Success', 'Your message has been sent successfully');
            }
            else{
                Alert::error('Ooops', 'Please kindly Login to get access to this');
            }
        }
        catch(Exception $e){
            Alert::error('Error', $e->getMessage());
        }

        return back();
    }

    public function propertyProfessionalReview(Request $request, $id)
    {
        if(auth::id())
        {
            $user_id = auth::id();
        }
        else{
            $user_id = null;
        }
        
        $review = ProfessionalReview::create([
            'user_id'=> $user_id,
            'professional_id'=> $id,
            'review'=>$request->input('review'),
        ]);

        Alert::info('Success','Your Review has been recorded.');

        return back();
    }
}
