<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Site;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => 'staff/users','middleware'=>'adminCheck'], function () {
    Route::get('/', [Admin\UsersController::class, 'index'])->name('admin.users');
    Route::get('create', [Admin\UsersController::class, 'create'])->name('admin.users.create');
    Route::post('store', [Admin\UsersController::class, 'store'])->name('admin.users.store');
    Route::get('delete/{id}', [Admin\UsersController::class, 'delete'])->name('admin.users.delete');
  });
  Route::group(['prefix' => 'staff/sliders','middleware'=>['adminCheck']], function () {
    // Route to show form for creating a slider
    Route::get('/create', [Admin\SliderController::class, 'create'])->name('admin.sliders.create');
    // Route to handle form submission for creating a slider
    Route::post('store',  [Admin\SliderController::class, 'store'])->name('admin.sliders.store');
    // Route to display all sliders
    Route::get('index',  [Admin\SliderController::class, 'index'])->name('admin.sliders.index');
});

  
Route::group(['namespace' => 'admin', 'middleware' => ['adminCheck']], function () {

  Route::get('/dashboard', [Admin\AdminController::class, 'index'])->name('admin.dashboard');
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



  Route::group(['prefix' => 'users'], function () {
    Route::get('/', [Admin\UsersController::class, 'index'])->name('admin.users');
    Route::get('create', [Admin\UsersController::class, 'create'])->name('admin.users.create');
    Route::post('store', [Admin\UsersController::class, 'store'])->name('admin.users.store');
    Route::get('delete/{id}', [Admin\UsersController::class, 'delete'])->name('admin.users.delete');
  });


  Route::group(['prefix' => 'properties'], function () {

    Route::get('/', [Admin\propertiesController::class, 'index'])->name('admin.properties');
    Route::get('create', [Admin\propertiesController::class, 'create'])->name('admin.properties.general.create');
    Route::post('store', [Admin\propertiesController::class, 'store'])->name('admin.properties.general.store');
    Route::get('edit/{id}', [Admin\propertiesController::class, 'edit'])->name('admin.properties.edit');
    Route::get('update/{id}', [Admin\propertiesController::class, 'update'])->name('admin.properties.update');
    Route::get('delete/{id}', [Admin\propertiesController::class, 'delete'])->name('admin.properties.delete');

    Route::get('price/{id}', [Admin\propertiesController::class, 'getprice'])->name('admin.properties.price');
    Route::post('price', [Admin\propertiesController::class, 'savePropertyPrice'])->name('admin.properties.price.store');

    Route::get('feature/{id}', [Admin\propertiesController::class, 'getPropertyFeature'])->name('admin.properties.features');
    Route::post('feature', [Admin\propertiesController::class, 'savePropertyFeature'])->name('admin.properties.features.store');

    Route::get('images/{id}', [Admin\propertiesController::class, 'addImages'])->name('admin.properties.images');
    Route::post('images', [Admin\propertiesController::class, 'savePropertyImages'])->name('admin.properties.images.store');
    Route::post('images/db', [Admin\propertiesController::class, 'savePropertyImagesDB'])->name('admin.properties.images.store.db');
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
