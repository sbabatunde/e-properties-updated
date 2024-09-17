<?php

use App\Http\Controllers\Site;
use Admin\propertiesController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\Admin\Index;
use App\Http\Controllers\Site\Admin\Profile;
use App\Http\Controllers\Site\Admin\Sliders;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\LandController;
use App\Http\Controllers\Site\UserController;
use App\Http\Controllers\Site\AgentController;
use App\Http\Controllers\Site\GroupController;
use App\Http\Controllers\Site\ReportController;
use App\Http\Controllers\Site\SliderController;
use App\Http\Controllers\Site\TenantController;
use App\Http\Controllers\Site\AuctionController;
use App\Http\Controllers\Site\RequestController;
use App\Http\Controllers\PropertyDealsController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\LandlordController;
use App\Http\Controllers\Site\PropertyController;
use App\Http\Controllers\Site\ServicesController;
use App\Http\Controllers\Site\BlacklistController;
use App\Http\Controllers\Site\Admin\PropertyMessage;
use App\Http\Controllers\Site\Admin\BuildingMaterial;
use App\Http\Controllers\Site\Admin\ListingController;
use App\Http\Controllers\Site\Admin\PostMediaController;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Http\Controllers\Site\BuildingMaterialController;
use App\Http\Controllers\Site\PropertyProfessionalController;
use App\Http\Controllers\BlacklistController as UserBlacklist;
use App\Http\Controllers\Site\Compare\PropertyController as ComparePropertyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| 
*/

//load Admin route
    // Route::middleware(['auth'])->group(function () {
    //     require __DIR__.'/admin.php';
    // });
//load Admin route

Route::get('/admin/test', function () {
    return view('admin.test1');
});


Auth::routes();
//Home Controller
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/index', 'index')->name('index');
});

//Request Routes
Route::controller(RequestController::class)->group(function () {
    Route::get('/request-form', 'makeRequest')->name('make.request');
    Route::post('/request/form/submit', 'submitRequest')->name('submit.request');
    Route::get('/all/property/requests', 'allPropertyRquests')->name('requests.all');
});

//Report Routes
Route::controller(ReportController::class)->group(function () {
    Route::get('/all-scam/report', 'allScamReport')->name('all.scam.report');
    Route::post('/scam/report', 'scamReport')->name('scam.report');
});

//Landlord Routes
Route::controller(LandlordController::class)->group(function () {
    Route::get('landlord', 'landlordPage')->name('landlord.index');
    Route::get('all-landlords', 'allLanlords')->name('all.landlords');
});

//Tenant Routes
Route::controller(TenantController::class)->group(function () {
    Route::get('/tenant', 'tenantIndex')->name('tenant.index');
});

//Land Routes
Route::controller(LandController::class)->group(function () {
    Route::get('/commercial-properties/land', 'landIndex')->name('land.index');
});

//Agents Routes
Route::controller(AgentController::class)->group(function () {
    Route::get('/view/agent/{id}', 'viewAgent')->name('agent.view');
    Route::get('/all/agents', 'allAgents')->name('agent.all');
});

//Property Professionals Routes
Route::controller(PropertyProfessionalController::class)->group(function () {
    Route::get('/view/property/professional/{id}', 'viewPropertyProfessionals')->name('property.professionals.view');
    Route::get('/all/property/professionals', 'allPropertyProfessionals')->name('property.professionals.all');
    Route::get('/property/professional/connect', 'allPropertyProfessionals')->name('property.professionals.connect');
    Route::post('/message/professional/{profID}', 'messagePropertyProfessional')->name('user.professional.message');
    Route::post('/review/professional/{profID}', 'propertyProfessionalReview')->name('professional.review');
});


//Building Materials Routes
Route::controller(BuildingMaterialController::class)->group(function () {
    Route::get('/building-material-view/{id}', 'getMaterials')->name('user.materials.get');
    Route::get('/building/material', 'buildingMaterials')->name('user.buiding-materials');

    // Route for search functionality
Route::get('/search/checkbox','checkboxSearch')->name('search.radio');
});


//Blogs Routes
Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'allBlogPost')->name('blog.post.all');
});

//Groups Routes
Route::controller(GroupController::class)->group(function () {
    Route::get('/group', 'index')->name('group.index');
});

//Blacklist Routes
Route::controller(UserBlacklist::class)->group(function () {
    Route::get('/blacklist', 'allBlacklist')->name('blacklist.all');
});
Route::get('property/search',[PropertyController::class,'propertySearch'])->name('property.search');

// All User Property Related Routes Begins
Route::controller(PropertyController::class)->group(function () {
    Route::get('property/{id}', 'propertyById')->name('property.details');
    Route::post('property/messge/{pID}/{aID}', 'propertyMessage')->name('user.property.message');
    Route::get('all/property/by/type', 'allPropertyTypes')->name('all.property.by.type');

    //Property Interactions 
    Route::post('property/likes/{id}', 'propertyLikes')->name('user.property.likes');
    
    //Residential Properties Routes Begins
    Route::get('all/properties/by/category/{category_slug}', 'propertyByCategory')->name('all.properties.category');
    //Residential Properties Routes Ends

    //commercial Properties Routes Begins
    Route::get('all/properties/listings', 'allPropertyListings')->name('all.properties.listing');
    //commercial Properties Routes Ends\\

    //Properti Review Routes Begins
    Route::post('property/review/{id}', 'propertyReview')->name('property.review');

    
    
});
Route::group(['prefix' => 'properties/'], function () {
    Route::get('all/deals', [PropertyDealsController::class,'index'])->name('properties.deals.all');
   });
  
//User Categories Routes
Route::controller(CategoryController::class)->group(function () {
    Route::get('/all/property/{slug}', 'propertiesByCategory')->name('all.property.by.category');
    Route::get('/property/by/type/{slug}', 'propertyByType')->name('property.by.type');
    Route::get('/all/property', 'allPropertyCategories')->name('property.category.all');
});


// Compare Add Route
Route::controller(ComparePropertyController::class)->group(function () {
    Route::post('/add-property-to-compare/{property_id}', 'addPropertyToCompare');
    Route::get('/user/compare', 'UserCompare')->name('user.compare');
    Route::get('/get-compare-property', 'GetCompareProperty');
    Route::post('/remove-property-compare/{id}', 'removePropertyCompare');
    Route::post('/clear-property-compare/{id}', 'clearPropertyCompare');
    
    Route::get('/compare-properties-page', 'comparePropertyPage')->name('compare.property.page');
});
// All User Property Related Routes Ends

//Auction Route
Route::controller(AuctionController::class)->group(function () {
    Route::get('/live/auctions', 'liveAuction')->name('user.live-auction');
    Route::get('/all/auctions/page', 'allAuctions')->name('user.all-auction');
    Route::get('/live/auctions/bid/{id}', 'placeAuctionBid')->name('user.auction.place-bid');
    Route::post('/user/auctions/place-bid/amount/{auctionID}', 'placeAuctionBidAmount')->name('user.auction.place-bid.amount');
});

//Services Route
Route::controller(ServicesController::class)->group(function () {
    Route::get('/services-page', 'findServices')->name('services.find');
    Route::get('/get/service/category/type/{slug}', 'getServiceType')->name('services.find.type');
    Route::get('/get/service/category/view/{slug}', 'allServiceProviders')->name('services.type.all');
    Route::get('/service/provider/view/{id}', 'viewServiceProviders')->name('service.provider.view');
    
});

//User Login Controller
Route::controller(UserController::class)->group(function () {
    Route::post('register-new-user', 'register')->name('user.register');
    Route::get('/user/login', 'login')->name('user.login');
    Route::post('/registered-user/login', 'redirect')->name('registered.user.login');
});
Route::get('/test/loudinar', [BuildingMaterial::class,'testCloudinaryConnection']);


Route::get('/test-cloudinary', function () {
    try {
        $uploadedImage = Cloudinary::upload('../assets/admin/images/photo/service11.png');
        return response()->json(['url' => $uploadedImage->getSecurePath()]);
    } catch (Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
});

Route::get('/env-test', function () {
    return [
        'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
        'api_key' => env('CLOUDINARY_API_KEY'),
        'api_secret' => env('CLOUDINARY_API_SECRET'),
        'upload_preset' => env('CLOUDINARY_UPLOAD_PRESET'),
    ];
});

//All Admin Routes Begins
//Index Route
Route::controller(Index::class)->middleware('auth')->group(function () {
//     Route::get('admin/index',  'adminIndex')->name('admin.index.page');
    Route::get('admin/dashboard',  'adminDashboard')->name('admin.dashboard');
});
//Profile Route
Route::controller(Profile::class)->group(function () {
    Route::get('my-profile', 'adminProfile')->name('admin.profile');
    Route::post('my-profile/edit/additional/{userID}', 'adminAddititionalEditProfile')->name('admin.profile.edit.additional');
    Route::post('my-profile/edit/{userID}', 'adminEditProfile')->name('admin.profile.edit');
});

//Listing Route
Route::controller(ListingController::class)->group(function () {
    Route::get('/get/listing/category/type/{slug}','getListingCategoryType')->name('get.listing.type');
    Route::post('store/property',  'storePropertyListing')->name('admin.properties.store');
    Route::get('add/listing',  'adminAddPropertyListing')->name('admin.add.listing');
    Route::get('my/listings',  'adminPropertyListing')->name('admin.listings.all');
});

//Post Media Route
// Route::controller(PostMediaController::class)->group(function () {
//     Route::get('/post/media/file',  'adminPostMedia')->name('admin.media.page');
//     Route::post('/post/media/file/form',  'adminPostMediaForm')->name('admin.media.post');
    
// });

//Property Message Route
Route::controller(PropertyMessage::class)->group(function () {
    Route::get('/my/property/messages',  'propertyMessage')->name('admin.property.messages')->middleware('auth');;
});



//Building Materials Route
Route::controller(BuildingMaterial::class)->group(function () {
    Route::get('/building/materials/form',  'buildingMaterialForm')->name('admin.building.material.form');
    Route::get('/building/materials/form/search/{category_slug}',  'buidlingTypeSearch')->name('admin.building.material.form.search');
    Route::post('/building/materials/store',  'buildingMaterialStore')->name('admin.building-material.store');
    Route::get('/building/materials/$%$%%A(()))9/all',  'myMaterials')->name('admin.materials.my');
});
//Admin Routes Ends
//Admin Slider Image


// Route::controller(SliderController::class)->group(function () {
//     Route::get('/add/slider/image',  'adminAddSliderImages')->name('admin.sliders.create');
//     Route::post('/save/slider/images',  'adminSaveSliderImages')->name('admin.sliders.images.store');
//     Route::post('/save/images/db',  'adminSaveSliderImagesDB')->name('admin.sliders.images.store.db');
// });
