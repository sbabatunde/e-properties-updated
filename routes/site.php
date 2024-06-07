<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Site;

Auth::routes(['verify' => true]);
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::group(['namespace' => 'Site'], function () {
        // route::get('/home', [Site\HomeController::class, 'home'])->name('home');
        route::get('/e-property/home', 'HomeController@index')->name('e-property.home');
        route::get('property/{id}', 'PropertyController@propertyById')->name('property.details');
    });
});
