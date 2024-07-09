<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Site;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => 'users'], function () {
    Route::get('/', [Admin\UsersController::class, 'index'])->name('admin.users');
    Route::get('create', [Admin\UsersController::class, 'create'])->name('admin.users.create');
    Route::post('store', [Admin\UsersController::class, 'store'])->name('admin.users.store');
    Route::get('delete/{id}', [Admin\UsersController::class, 'delete'])->name('admin.users.delete');
  });
