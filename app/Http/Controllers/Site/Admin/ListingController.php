<?php

namespace App\Http\Controllers\Site\Admin;

use Carbon\Carbon;
use App\Models\City;
use App\Models\Auction;
use App\Models\Category;
use App\Models\Property;
use App\Models\site\Message;
use Illuminate\Http\Request;
use App\Models\PropertyPayment;
use App\Models\PropertyAmenities;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Image as SliderImage;
use App\Models\PropertyDeals;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Laravel\Facades\Image;

class ListingController extends Controller
{
    public function adminAddPropertyListing()
    {
        if (Auth::id() && Auth::user()->user_type !== "tenant") {
            return view('admin.properties.create');
        } else if (Auth::id() && Auth::user()->user_type == "tenant") {
            Alert::error('Unauthorized Access!!', 'You need to upgrade to your account to be able to go further');
            return back();
        } else {
            Alert::error('Access Denied!!!', 'You need to login in first');
            return redirect()->route('user.login');
        }
    }

    public function storePropertyListing(Request $request)
    {
        // dd($request->all());
        if (Auth::id() && Auth::user()->user_type !== "tenant") {
            $request->validate([
                'title' => 'required|string',
                'category' => 'required|string',
                'furnishing' => 'required',
                'type' => 'required',
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
                // 'thumbnail' => 'mimes:jpg,png|max:3072|required',
                // 'amenities' => 'mimes:jpg,bmp,png', 'max:3072',
            ]);

            //For protecting Data Integrity For checkboxes 
            if ($request->auction !== "Yes") {
                $auction = "No";
            } else {
                $auction = $request->auction;
            }
            if ($request->deal !== "Yes") {
                $deal = "No";
            } else {
                $deal = $request->deal;
            }
            if ($request->installment !== "Yes") {
                $installment = "No";
            } else {
                $installment = $request->installment;
            }
            if ($request->C_of_O !== "Yes") {
                $C_of_O = "No";
            } else {
                $C_of_O = $request->C_of_O;
            }
            if ($request->survey_plan !== "Yes") {
                $survey_plan = "No";
            } else {
                $survey_plan = $request->survey_plan;
            }
            if ($request->deed_ass !== "Yes") {
                $deed_ass = "No";
            } else {
                $deed_ass = $request->deed_ass;
            }
            if ($request->grant_prob !== "Yes") {
                $grant_prob = "No";
            } else {
                $grant_prob = $request->grant_prob;
            }
            if ($request->deed_mortgage !== "Yes") {
                $deed_mortgage = "No";
            } else {
                $deed_mortgage = $request->deed_mortgage;
            }
            if ($request->deed_gift !== "Yes") {
                $deed_gift = "No";
            } else {
                $deed_gift = $request->deed_gift;
            }
            if ($request->land_receipt !== "Yes") {
                $land_receipt = "No";
            } else {
                $land_receipt = $request->land_receipt;
            }
            if ($request->property_doc !== "Yes") {
                $property_doc = "No";
            } else {
                $property_doc = $request->property_doc;
            }
            //End of checkboxes  
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

                if ($request->file('thumbnail')) {
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()) . '.' . $request->file('thumbnail')
                        ->getClientOriginalExtension();
                    $img = $manager->read($request->file('thumbnail'));
                    $img = $img->resize(450, 450);

                    $img->toJpeg(80)->save(base_path('public/assets/frontend/property/thumbnail/' .
                        $name_gen));
                    $uploadPath = 'assets/frontend/property/thumbnail/' . $name_gen;
                }
                // dd(Auth::id());
                $property = Property::create([
                    'agent_id' => Auth::id(),
                    'title' => $request->title,
                    'category' => $request->category,
                    'furnishing' => $request->furnishing,
                    'type' => $request->type,
                    'bathrooms' => $request->bathrooms,
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
                    'thumbnail' => $uploadPath,
                    'deal' => $deal
                ]);

                //Insert Amenities
                if ($request->has('amenities')) {
                    foreach ($request->file('amenities') as $img) {
                        $manager = new ImageManager(new Driver());
                        $name_gen = hexdec(uniqid()) . '.' . $img
                            ->getClientOriginalExtension();
                        $img = $manager->read($img);
                        $img = $img->resize(400, 453);

                        $img->toJpeg(80)->save(base_path('public/assets/frontend/property/amenities/' .
                            $name_gen));
                        $uploadPath = 'assets/frontend/property/amenities/' . $name_gen;

                        PropertyAmenities::insert([
                            'property_id' => $property['id'],
                            'amenities' => $uploadPath,
                            'created_at' => Carbon::now(),

                        ]);
                    }
                }

                //Insert Auction Details
                if ($property['auction'] == 'Yes') {
                    Auction::create([
                        'property_id' => $property['id'],
                        'start_date' => $request->start_date,
                        'start_time' => $request->start_time,
                        'end_time' => $request->end_time,
                        'end_date' => $request->end_date,
                        'starting_price' => $request->starting_price,
                        'denomination' => $request->auction_denomination,
                        'append' => $request->auction_append_to,

                    ]);
                }
                //Insert Auction Installment Payment Details
                if ($property['installment'] == 'Yes') {
                    PropertyPayment::create([
                        'property_id' => $property['id'],
                        'sequence' => $request->payment_mthd,
                        'initial_pay' => $request->init_pay,
                        'subsequent_pay' => $request->subs_pay,
                        'initial_denomiation' => $request->init_denomination,
                        'subsequent_denomination' => $request->subs_denomination,
                        'initial_append' => $request->init_append,
                        'subsequent_append' => $request->subs_append,
                    ]);
                }

                if ($property['deal'] == 'Yes') {
                    $deal = PropertyDeals::create([
                        'property_id' => $property['id'],
                        'start_date' => $request->deal_start_date,
                        'start_time' => $request->deal_start_time,
                        'end_time' => $request->deal_end_time,
                        'end_date' => $request->deal_end_date,
                        'starting_price' => $request->deal_price,
                        'denomination' => $request->deal_denomination,
                        'append' => $request->deal_append_to,
                    ]);
                    dd($deal['property_id']);
                }
            });

            Alert::success('Success!', 'Your Property has been posted successfully');
            return back();
        } else if (Auth::id() && Auth::user()->user_type == "tenant") {
            Alert::error('Unauthorized Access!!', 'You need to upgrade to your account to be able to go further');
            return back();
        } else {
            Alert::error('Access Denied!!!', 'You need to login in first');
            return redirect()->route('user.login');
        }
    }

    public function adminPropertyListing()
    {
        return view('admin.listings.main-page');
    }
}
