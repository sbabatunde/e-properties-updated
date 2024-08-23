<?php

use App\Http\Controllers\Site;
use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyDealsController;
use App\Http\Controllers\Site\PropertyController;
use App\Http\Controllers\Site\Admin\PostMediaController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


// Route::group(['prefix' => 'staff/user/','middleware'=>'adminCheck'], function () {
  
//     Route::get('create', [Admin\UsersController::class, 'create'])->name('admin.users.create');
//     Route::post('edit', [Admin\UsersController::class, 'edit'])->name('admin.users.edit');
//     Route::post('store', [Admin\UsersController::class, 'store'])->name('admin.users.store');
//     Route::get('delete/{id}', [Admin\UsersController::class, 'delete'])->name('admin.users.delete');
//   });
  Route::group(['prefix' => 'staff/sliders','middleware'=>['auth','adminCheck']], function () {
    // Route to show form for creating a slider
    Route::get('/create', [Admin\SliderController::class, 'create'])->name('admin.sliders.create');
    // Route to handle form submission for creating a slider
    Route::post('store',  [Admin\SliderController::class, 'store'])->name('admin.sliders.store');
    // Route to display all sliders
    Route::get('index',  [Admin\SliderController::class, 'index'])->name('admin.sliders.index');
});

//Post Media Route
Route::group(['middleware'=>['auth','adminCheck']],function () {
  Route::get('/post/media/file',   [PostMediaController::class,'adminPostMedia'])->name('admin.media.page');
    Route::post('/post/media/file/form',   [PostMediaController::class,'adminPostMediaForm'])->name('admin.media.post');

    
    // Route::get('/create', [PostMediaController::class, 'adminPostMedia'])->name('admin.media.page');
    // Route::get('/post/file', [PostMediaController::class, 'adminPostMedia'])->name('admin.media.page');
    // Route::post('/post/file/form', [PostMediaController::class, 'adminPostMediaForm'])->name('admin.media.post');
});

Route::group(['prefix' => 'staff/blacklist','middleware'=>['auth','adminCheck']], function () {
  // Route to show form for creating a slider
  Route::get('/create', [Admin\BlacklistController::class, 'create'])->name('admin.blacklist.create');
  // Route to handle form submission for creating a slider
  Route::post('store',  [Admin\BlacklistController::class, 'store'])->name('admin.blacklist.store');
  // Route to display all sliders
  Route::get('index',  [Admin\BlacklistController::class, 'index'])->name('admin.blacklist.index');
});
  
Route::group(['namespace' => 'admin', 'middleware' => ['auth','adminCheck']], function () {

  Route::get('/dashboard', [Admin\AdminController::class, 'index'])->name('e-admin.dashboard');
  Route::get('logout', [Admin\LoginController::class, 'logout'])->name('admin.logout');
  // new route
  Route::get('/edit/profile', [Admin\ProfileController::class, 'editProfile'])->name('admin.edit.profile');
  // Route::get('/my-listings/all', [Admin\ListingsController::class, 'myListings'])->name('admin.listings.all');
  // End of new routes
  Route::group(['prefix' => 'main_categories'], function () {
    Route::get('/', [Admin\MainCategoriesController::class, 'index'])->name('admin.categories');
    Route::get('create', [Admin\MainCategoriesController::class, 'create'])->name('admin.categories.create');
    Route::post('store', [Admin\MainCategoriesController::class, 'store'])->name('admin.categories.store');
    Route::get('edit/{id}', [Admin\MainCategoriesController::class, 'edit'])->name('admin.categories.edit');
    Route::post('update/{id}', [Admin\MainCategoriesController::class, 'update'])->name('admin.categories.update');
    Route::get('delete/{id}', [Admin\MainCategoriesController::class, 'delete'])->name('admin.categories.delete');
  });

 

  Route::group(['prefix' => 'cities'], function () {
    Route::get('/', [Admin\CitiesController::class, 'index'])->name('admin.cities');
    Route::get('create', [Admin\CitiesController::class, 'create'])->name('admin.cities.create');
    Route::post('store', [Admin\CitiesController::class, 'store'])->name('admin.cities.store');
    Route::get('edit/{id}', [Admin\CitiesController::class, 'edit'])->name('admin.cities.edit');
    Route::post('update/{id}', [Admin\CitiesController::class, 'update'])->name('admin.cities.update');
    Route::get('delete/{id}', [Admin\CitiesController::class, 'delete'])->name('admin.cities.delete');
  });



  Route::group(['prefix' => 'staff/users'], function () {
    Route::get('all', [Admin\UsersController::class, 'index'])->name('admin.users.all');
    Route::get('admins', [Admin\UsersController::class, 'admins'])->name('admin.users');
    Route::get('edit', [Admin\UsersController::class, 'edit'])->name('admin.users.edit');
    
    Route::get('create', [Admin\UsersController::class, 'create'])->name('admin.users.create');
    Route::post('store', [Admin\UsersController::class, 'storeUser'])->name('admin.users.store');
    Route::get('/service-types/search/{slug}',   [Admin\UsersController::class, 'categoryTypeSearch'])
    ->name('admin.service.type.search');
    Route::post('store/admin', [Admin\UsersController::class, 'storeAdmin'])->name('admin.users.add');
    Route::post('verify/user/{id}', [Admin\UsersController::class, 'verifyUser'])->name('admin.verify.user');
    Route::post('blacklist/user/remove', [Admin\UsersController::class, 'removeFromBlacklist'])->name('admin.users.remove');
    Route::post('blacklist/user/add', [Admin\UsersController::class, 'addToBlacklist'])->name('admin.blacklist.add');
    
    // Route::post('store', [Admin\UsersController::class, 'store'])->name('admin.users.store');
    Route::get('delete/{id}', [Admin\UsersController::class, 'delete'])->name('admin.users.delete');
  });


  Route::group(['prefix' => 'properties'], function () {

    Route::get('/', [Admin\propertiesController::class, 'AllProperties'])->name('admin.properties.all');
    Route::POST('/add/to/trending/{id}', [Admin\propertiesController::class, 'addToTrending'])->name('admin.trending.add');
    Route::POST('/remove/from/trending/{id}', [Admin\propertiesController::class, 'removeFromTrending'])->name('admin.trending.remove');
    Route::get('/all/trending/properties', [Admin\propertiesController::class, 'trendingProperties'])->name('admin.trending.all');
    Route::get('/admin/all/deals/properties', [Admin\propertiesController::class, 'allDealsProperties'])->name('admin.deals.all');
    Route::post('store', [Admin\propertiesController::class, 'store'])->name('admin.properties.general.store');
    Route::get('edit/{id}', [Admin\propertiesController::class, 'edit'])->name('admin.properties.edit');
    Route::get('update/{id}', [Admin\propertiesController::class, 'update'])->name('admin.properties.update');
    Route::get('delete/{id}', [Admin\propertiesController::class, 'delete'])->name('admin.properties.delete');
  });


  ################################## sliders ######################################
  Route::group(['prefix' => 'sliders'], function () {
    Route::get('/', [Admin\SliderController::class, 'addImages'])->name('admin.sliders.s');
    Route::post('images', [Admin\SliderController::class, 'saveSliderImages'])->name('admin.sliders.images.s');
    Route::post('images/db', [Admin\SliderController::class, 'saveSliderImagesDB'])->name('admin.sliders.images.store.s');
  });
  ################################## end sliders    #######################################
});


Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin',], function () {
  Route::get('login', [Admin\LoginController::class, 'getLogin'])->name('get.essential.admin.login');
  Route::post('login', [Admin\LoginController::class, 'login'])->name('admin.login');
});
