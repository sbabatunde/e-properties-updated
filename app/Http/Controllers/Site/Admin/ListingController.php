<?php

namespace App\Http\Controllers\Site\Admin;

use Carbon\Carbon;
use App\Models\City;
use App\Models\User;
use App\Models\Auction;
use App\Models\Category;
use App\Models\Property;
use Cloudinary\Cloudinary;
use Illuminate\Support\Str;
use App\Models\site\Message;
use Illuminate\Http\Request;
use App\Models\PropertyDeals;
use App\Models\PropertyPayment;
use App\Models\PropertyAmenities;
use App\Models\Site\PropertyType;
use Illuminate\Support\Facades\DB;
use Yoeunes\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use App\Models\Image as SliderImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManager;
use App\Models\Site\PropertyCategory;
use App\Mail\Properties\NewListingMail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Laravel\Facades\Image;

class ListingController extends Controller
{
    public function myProperties()
    {
        $properties = Property::with(['payment','agent','trending'])->where('agent_id',Auth::id())->paginate(10);

        return view('dashboard.properties.my-properties', compact('properties'));
    }

    public function myDealsProperties()
    {
       $propertyDeals = Property::has('deals')->with(['payment','agent'])->where('agent_id',Auth::id())->paginate(10);

       return view('dashboard.properties.my-deals', compact('propertyDeals'));
    }

    public function adminAddPropertyListing()
    {
        if (Auth::id() && Auth::user()->user_type !== "tenant") {
            $category = PropertyCategory::get();
            return view('admin.properties.create',compact('category'));
        } else if (Auth::id() && Auth::user()->user_type == "tenant") {
            Toastr::error('Unauthorized Access!!', 'You need to upgrade to your account to be able to go further');
            return back();
        } else {
            Toastr::error('Access Denied!!!', 'You need to login in first');
            return redirect()->route('user.login');
        }
    }

    public function getListingCategoryType($slug)
    {
        try {
            $getType = PropertyType::where('category_slug',$slug)->get();
            return response()->json($getType);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }
   
    public function storePropertyListing(Request $request)
    {
        if (Auth::id() && Auth::user()->user_type !== "tenant") {
            // Define validation rules
            $rules = [
                'title' => 'required|string',
                'type' => 'required',
                'furnishing' => 'required',
                'landlord' => 'required',
                'status' => 'required',
                // 'avg_room_size' => 'required',
                'bedrooms' => 'required',
                'bathrooms' => 'required',
                'toilet' => 'required',
                'start_date' => 'required_if:auction,Yes',
                'start_time' => 'required_if:auction,Yes',
                'end_date' => 'required_if:auction,Yes',
                'end_time' => 'required_if:auction,Yes',
                'starting_price' => 'required_if:auction,Yes',
                'auction_denomination' => 'required_if:auction,Yes',
                'auction_append_to' => 'required_if:auction,Yes',
                'state' => 'required|string',
                'localty' => 'required|string',
                'street' => 'required|string',
                'deal_start_date' => 'required_if:deal,Yes',
                'deal_start_time' => 'required_if:deal,Yes',
                'deal_end_date' => 'required_if:deal,Yes',
                'deal_end_time' => 'required_if:deal,Yes',
                'deal_price' => 'required_if:deal,Yes',
                'deal_denomination' => 'required_if:deal,Yes',
                'deal_append_to' => 'required_if:deal,Yes',
                'payment_mthd' => 'required_if:installment,Yes',
                'init_pay' => 'required_if:installment,Yes',
                'init_denomination' => 'required_if:installment,Yes',
                'init_append' => 'required_if:installment,Yes|string',
                'subs_pay' => 'required_if:installment,Yes',
                'subs_denomination' => 'required_if:installment,Yes',
                'subs_append' => 'required_if:installment,Yes',
                'description' => 'required|string|max:255',
                'thumbnail' => 'image|mimes:jpg,png|max:3072|nullable',
                'amenities.*' => 'image|mimes:jpg,bmp,png|max:3072|nullable',
            ];

            // Create a validator instance
            $validator = Validator::make($request->all(), $rules);

            // Check if validation fails
            if ($validator->fails()) {
                // Get the first error message
                $errors = $validator->errors();
                $firstError = $errors->first();

                // Show an alert with the first error message
                Alert::error('Oops!!', $firstError);

                // Optionally, redirect back with errors
                return redirect()->back()->withErrors($errors)->withInput();
            }
            
            // Handle checkbox defaults
            $auction = $request->auction === "Yes" ? "Yes" : "No";
            $deal = $request->deal === "Yes" ? "Yes" : "No";
            $installment = $request->installment === "Yes" ? "Yes" : "No";
            $C_of_O = $request->C_of_O === "Yes" ? "Yes" : "No";
            $survey_plan = $request->survey_plan === "Yes" ? "Yes" : "No";
            $deed_ass = $request->deed_ass === "Yes" ? "Yes" : "No";
            $grant_prob = $request->grant_prob === "Yes" ? "Yes" : "No";
            $deed_mortgage = $request->deed_mortgage === "Yes" ? "Yes" : "No";
            $deed_gift = $request->deed_gift === "Yes" ? "Yes" : "No";
            $land_receipt = $request->land_receipt === "Yes" ? "Yes" : "No";
            $property_doc = $request->property_doc === "Yes" ? "Yes" : "No";

            DB::transaction(function () use (
                $request,
                $auction,
                $deal,
                $installment,
                $C_of_O,
                $survey_plan,
                $deed_ass,
                $grant_prob,
                $deed_mortgage,
                $deed_gift,
                $property_doc,
                $land_receipt,
            ) {
                // Handle thumbnail upload
                $cloudinary = new Cloudinary();

                $thumbnailUrl = null;
                if ($request->file('thumbnail')) 
                {
                    // Use ImageManager from Intervention Image
                    $manager = new ImageManager(new Driver()); // or 'imagick'
                    $file = $request->file('thumbnail');
                    $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
    
                    // Process the image
                    $img = $manager->read($file->getPathname());
                    $img->resize(450, 450, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
    
                    // Save the image to a temporary location
                    $tempFilePath = sys_get_temp_dir() . '/' . $name_gen;
                    $img->save($tempFilePath); // Encode the image to JPEG format
    
                    // Upload to Cloudinary
                    $uploadResult = $cloudinary->uploadApi()->upload($tempFilePath, [
                        'folder' => 'e-properties/properties/thumbnail',
                        'resource_type' => 'image',
                        'overwrite' => true
                    ]);
    
                    // Clean up temporary file
                    unlink($tempFilePath);
                    $thumbnailUrl = $uploadResult['secure_url'];
                }

                $propertyID = "EP"."".(int) substr(Str::orderedUuid(),0,8)."";
                $property = Property::create([
                    'agent_id' => Auth::id(),
                    'title' => $request->title,
                    'property_code' => $propertyID,
                    'status' => $request->status,
                    'landlord' => $request->landlord,
                    'furnishing' => $request->furnishing,
                    'type_id' => $request->type,
                    'bathrooms' => $request->bathrooms,
                    'bedrooms' => $request->bedrooms,
                    'toilets' => $request->toilet,
                    'auction' => $auction,
                    'deal' => $deal,
                    'description' => $request->description,
                    'state' => $request->state,
                    'localty' => $request->localty,
                    'area' => $request->area,
                    'street' => $request->street,
                    'installment' => $installment,
                    'C_of_O' => $C_of_O,
                    'survey_plan' => $survey_plan,
                    'deed_of_ass' => $deed_ass,
                    'grant_of_prob' => $grant_prob,
                    'deed_of_mort' => $deed_mortgage,
                    'deed_of_gift' => $deed_gift,
                    'property_doc' => $property_doc,
                    'land_receipt' => $land_receipt,
                    'thumbnail' => $thumbnailUrl,
                ]);

                // Handle amenities upload
                if ($request->has('amenities')) {
                       
                    foreach ($request->file('amenities') as $img) {
                       
                         // Use ImageManager from Intervention Image
                         $manager = new ImageManager(new Driver()); // or 'imagick'
                         $file = $img;
                         $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
         
                         // Process the image
                         $img = $manager->read($file->getPathname());
                         $img->resize(450, 450, function ($constraint) {
                             $constraint->aspectRatio();
                             $constraint->upsize();
                         });
         
                         // Save the image to a temporary location
                         $tempFilePath = sys_get_temp_dir() . '/' . $name_gen;
                         $img->save($tempFilePath); // Encode the image to JPEG format
         
                         // Upload to Cloudinary
                         $uploadResult = $cloudinary->uploadApi()->upload($tempFilePath, [
                             'folder' => 'e-properties/properties/amenities',
                             'resource_type' => 'image',
                             'overwrite' => true
                         ]);
         
                         // Clean up temporary file
                         unlink($tempFilePath);
                         $url = $uploadResult['secure_url'];

                        PropertyAmenities::create([
                            'property_id' => $property->id,
                            'amenities' => $url,
                            'created_at' => Carbon::now(),
                        ]);
                    }
                }

                // Insert Auction Details
                if ($property->auction === 'Yes') {
                    Auction::create([
                        'property_id' => $property->id,
                        'start_date' => $request->start_date,
                        'start_time' => $request->start_time,
                        'end_time' => $request->end_time,
                        'end_date' => $request->end_date,
                        'starting_price' => $request->starting_price,
                        'denomination' => $request->auction_denomination,
                        'append' => $request->auction_append_to,
                    ]);
                }

                // Insert Auction Installment Payment Details
                // if ($property->installment === 'Yes' ) {
                    PropertyPayment::create([
                        'property_id' => $property->id,
                        'sequence' => $request->payment_mthd,
                        'initial_pay' => $request->init_pay,
                        'subsequent_pay' => $request->subs_pay,
                        'initial_denomination' => $request->init_denomination,
                        'subsequent_denomination' => $request->subs_denomination,
                        'initial_append' => $request->init_append,
                        'subsequent_append' => $request->subs_append,
                    ]);
                // }

                // Insert Deal Details
                if ($property->deal === 'Yes') {
                    PropertyDeals::create([
                        'property_id' => $property->id,
                        'start_date' => $request->deal_start_date,
                        'start_time' => $request->deal_start_time,
                        'end_time' => $request->deal_end_time,
                        'end_date' => $request->deal_end_date,
                        'deal_price' => $request->deal_price,
                        'denomination' => $request->deal_denomination,
                        'append' => $request->deal_append_to,
                    ]);
                }
                $user = User::where('id',$property['agent_id'])->first();
                $userName = $user->firstname.' '.$user->lastname;
                $userEmail = $user->email;
                $to = [$userEmail];
                $cc = ['admin@eproperties.ng'];
    
                $details = [
                    "name" => $userName,
                    "title" => $property['title'],
                    "property_code" => $property['property_code'],
                ];
    
                Mail::to($to)
                    ->cc($cc)
                    // ->bcc($bcc)
                    ->send(new NewListingMail($details));
            });
           
            Alert::success('Success!', 'Your Property has been posted successfully');
            return back();
        } else if (Auth::id() && Auth::user()->user_type == "tenant") {
            Alert::error('Unauthorized Access!!', 'You need to upgrade your account to be able to proceed.');
            return back();
        } else {
            Alert::error('Access Denied!!!', 'You need to log in first.');
            return redirect()->route('user.login');
        }
    }

    public function editPropertyListing($id)
    {
        $category = PropertyCategory::get();
        $property = Property::with(['payment','agent','trending','auctionDetails','dealsDetails'])->where('id',$id)->first();
        // Manually create an alias for the 'auction' relationship
      return view('admin.properties.edit', compact('property','category'));
    }

    public function updatePropertyListing(Request $request, $id)
    {
        if (Auth::id() && Auth::user()->user_type !== "tenant") {
            // Fetch the property from the database
            $property = Property::findOrFail($id);

            // Define validation rules (same as before)
            $rules = [
                // your validation rules here...
            ];

            // Create a validator instance
            $validator = Validator::make($request->all(), $rules);

            // Check if validation fails
            if ($validator->fails()) {
                // Handle validation failure as before...
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Handle checkbox defaults (same as before)
            $auction = $request->auction === "Yes" ? "Yes" : "No";
            $deal = $request->deal === "Yes" ? "Yes" : "No";
            $installment = $request->installment === "Yes" ? "Yes" : "No";
            $C_of_O = $request->C_of_O === "Yes" ? "Yes" : "No";
            $survey_plan = $request->survey_plan === "Yes" ? "Yes" : "No";
            $deed_ass = $request->deed_ass === "Yes" ? "Yes" : "No";
            $grant_prob = $request->grant_prob === "Yes" ? "Yes" : "No";
            $deed_mortgage = $request->deed_mortgage === "Yes" ? "Yes" : "No";
            $deed_gift = $request->deed_gift === "Yes" ? "Yes" : "No";
            $land_receipt = $request->land_receipt === "Yes" ? "Yes" : "No";
            $property_doc = $request->property_doc === "Yes" ? "Yes" : "No";

            DB::transaction(function () use (
                $request,
                $auction,
                $deal,
                $installment,
                $C_of_O,
                $survey_plan,
                $deed_ass,
                $grant_prob,
                $deed_mortgage,
                $deed_gift,
                $property_doc,
                $land_receipt,
                $property
            ) {
                // Handle thumbnail upload (same as before)

                // Update property details (same as before)

                // Handle amenities upload (same as before)

                // Handle Auction Details
                if ($auction === 'Yes') {
                    // Check if auction already exists
                    $auctionDetails = Auction::where('property_id', $property->id)->first();

                    if ($auctionDetails) {
                        // Update existing auction details
                        $auctionDetails->update([
                            'start_date' => $request->start_date,
                            'start_time' => $request->start_time,
                            'end_time' => $request->end_time,
                            'end_date' => $request->end_date,
                            'starting_price' => $request->starting_price,
                            'denomination' => $request->auction_denomination,
                            'append' => $request->auction_append_to,
                        ]);
                    } else {
                        // Create a new auction entry
                        Auction::create([
                            'property_id' => $property->id,
                            'start_date' => $request->start_date,
                            'start_time' => $request->start_time,
                            'end_time' => $request->end_time,
                            'end_date' => $request->end_date,
                            'starting_price' => $request->starting_price,
                            'denomination' => $request->auction_denomination,
                            'append' => $request->auction_append_to,
                        ]);
                    }
                } else {
                    // If auction is set to 'No', remove any auction details
                    Auction::where('property_id', $property->id)->delete();
                }

                // Handle Installment Payment Details
                if ($installment === 'Yes') {
                    // Check if installment payment details already exist
                    $paymentDetails = PropertyPayment::where('property_id', $property->id)->first();

                    if ($paymentDetails) {
                        // Update existing payment details
                        $paymentDetails->update([
                            'sequence' => $request->payment_mthd,
                            'initial_pay' => $request->init_pay,
                            'subsequent_pay' => $request->subs_pay,
                            'initial_denomination' => $request->init_denomination,
                            'subsequent_denomination' => $request->subs_denomination,
                            'initial_append' => $request->init_append,
                            'subsequent_append' => $request->subs_append,
                        ]);
                    } else {
                        // Create new installment payment details
                        PropertyPayment::create([
                            'property_id' => $property->id,
                            'sequence' => $request->payment_mthd,
                            'initial_pay' => $request->init_pay,
                            'subsequent_pay' => $request->subs_pay,
                            'initial_denomination' => $request->init_denomination,
                            'subsequent_denomination' => $request->subs_denomination,
                            'initial_append' => $request->init_append,
                            'subsequent_append' => $request->subs_append,
                        ]);
                    }
                } else {
                    // If installment is set to 'No', remove any payment details
                    PropertyPayment::where('property_id', $property->id)->delete();
                }

                // Handle Deal Details
                if ($deal === 'Yes') {
                    // Check if deal details already exist
                    $dealDetails = PropertyDeals::where('property_id', $property->id)->first();

                    if ($dealDetails) {
                        // Update existing deal details
                        $dealDetails->update([
                            'start_date' => $request->deal_start_date,
                            'start_time' => $request->deal_start_time,
                            'end_time' => $request->deal_end_time,
                            'end_date' => $request->deal_end_date,
                            'deal_price' => $request->deal_price,
                            'denomination' => $request->deal_denomination,
                            'append' => $request->deal_append_to,
                        ]);
                    } else {
                        // Create a new deal entry
                        PropertyDeals::create([
                            'property_id' => $property->id,
                            'start_date' => $request->deal_start_date,
                            'start_time' => $request->deal_start_time,
                            'end_time' => $request->deal_end_time,
                            'end_date' => $request->deal_end_date,
                            'deal_price' => $request->deal_price,
                            'denomination' => $request->deal_denomination,
                            'append' => $request->deal_append_to,
                        ]);
                    }
                } else {
                    // If deal is set to 'No', remove any deal details
                    PropertyDeals::where('property_id', $property->id)->delete();
                }

                // Send email or perform any other necessary actions...
            });

            Alert::success('Success!', 'Your Property has been updated successfully');
            return back();
        } else {
            Alert::error('Access Denied!!!', 'You need to log in first.');
            return redirect()->route('user.login');
        }
    }

    public function updateListingStatus(Request $request, $id)
    {
        $property = Property::findOrFail($id);

        // Validate the input
        $request->validate([
            'status' => 'required|in:Sold,Rented,Sale,Rent,Let',
        ]);

        // Update the status
        $property->status = $request->status;
        $property->save();

        return response()->json(['success' => true, 'message' => 'Status updated successfully!']);
    }

    public function deletePropertyListing($id)
    {
        if (Auth::id() && Auth::user()->user_type !== "tenant") {
            // Fetch the property from the database
            $property = Property::findOrFail($id);
    
            DB::transaction(function () use ($property) {
                // Delete related amenities
                PropertyAmenities::where('property_id', $property->id)->delete();
    
                // Delete auction details if any
                Auction::where('property_id', $property->id)->delete();
    
                // Delete installment payment details if any
                PropertyPayment::where('property_id', $property->id)->delete();
    
                // Delete deal details if any
                PropertyDeals::where('property_id', $property->id)->delete();
    
                // Optionally, you can delete the property thumbnail from Cloudinary as well
                if ($property->thumbnail) {
                    // Assuming Cloudinary is set up
                    $cloudinary = new Cloudinary();
                    $cloudinary->uploadApi()->destroy($property->thumbnail);
                }
    
                // Finally, delete the property
                $property->delete();
            });
    
            // Use the with() method for session flash success message
            return redirect()->back()->with('success', 'Your property has been deleted successfully.');
        } else {
            // If the user is unauthorized
            return redirect()->route('user.login')->with('Access Denied!!!', 'You need to log in first.');
        }
    }
    
    public function adminPropertyListing()
    {
       $myListings = Property::with(['amenities','agent', 'payment', 'auction','likes','shares','views'])
        ->where('agent_id', Auth::id())->paginate(3); 
        $sales = Property::with(['amenities','agent', 'payment', 'auction','likes','shares','views'])
        ->where('agent_id', Auth::id())->where('status', 'Sale')->paginate(3);
        $rents = Property::with(['amenities','agent', 'payment', 'auction','likes','shares','views'])
        ->where('agent_id', Auth::id())->where('status', 'Rent')->paginate(3);
        $lets = Property::with(['amenities','agent', 'payment', 'auction','likes','shares','views'])
        ->where('agent_id', Auth::id())->where('status', 'Let')->paginate(3);
        $lands = Property::with(['amenities','agent', 'payment', 'auction','likes','shares','views'])
        ->where('agent_id', Auth::id())->where('status', 'Land')->paginate(3);
        $shortlets = Property::with(['amenities','agent', 'payment', 'auction','likes','shares','views'])
        ->where('agent_id', Auth::id())->where('status', 'Shortlet')->paginate(3);
     
        return view('admin.listings.main-page',compact('myListings','sales','rents','lets','lands','shortlets'));
    }

    public function liveAuctionControl()
    {
        // Current timestamp
        $now = Carbon::now();

        // Fetch live auctions with related data
        $liveAuction = Auction::with([
            'property', 
            'property.agent', 
            'auctionBid.bidder',
            'auctionBid' => function ($query) {
                $query->orderBy('bid_amount', 'desc'); // Ensure highest bid comes first
            }
        ])
        ->where('start_date', '<=', $now)  // Auction has started
        ->where('end_date', '>=', $now)    // Auction is still ongoing
        ->paginate(10); // Paginate results

        return view('admin.listings.live-auction', compact('liveAuction'));
    }

    public function myLiveAuctionControl()
    {
        // Current timestamp
        $now = Carbon::now();

       // Fetch live auctions with related data where the agent_id in property matches the authenticated user
        $liveAuction = Auction::with([
            'property',
            'property.agent',
            'auctionBid.bidder',
            'auctionBid' => function ($query) {
                $query->orderBy('bid_amount', 'desc'); // Ensure highest bid comes first
            }
        ])
        ->whereHas('property', function ($query) {
            $query->where('agent_id', Auth::id()); // Filter properties where agent_id matches Auth user's ID
        })
        ->where('start_date', '<=', $now)  // Auction has started
        ->where('end_date', '>=', $now)    // Auction is still ongoing
        ->paginate(10); // Paginate results

        return view('admin.listings.my-live-auction', compact('liveAuction'));
    }

    public function updateAuctionStatus(Request $request, $id)
    {
        $auction = Auction::where('property_id',$id);

        // Validate the input
        $request->validate([
            'status' => 'required|in:Ongoing,Ended',
        ]);

        // // Update the status
        $auction = Auction::where('property_id',$id)->update([
            'status'=>$request->status
        ]);
        
        return response()->json(['success' => true, 'message' => 'Status updated successfully!','data'=>$auction]);
    }


}
