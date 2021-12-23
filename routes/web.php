<?php

use App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\HeroSection;
use App\Http\Controllers\Admin\Location;
use App\Http\Controllers\Admin\Profile;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Medical\Home;
use Illuminate\Support\Facades\Route;

//Admin
Route::prefix('admin')->group(function(){
    Route::get('/',[Auth::class, 'login'])->name('login')->middleware('alreadyloggedin');
    Route::post('/',[Auth::class, 'logged_in'])->name('login')->middleware('alreadyloggedin');
    Route::get('/dashboard',[Dashboard::class, 'dashboard'])->name('dashboard')->middleware('authcheck');
    Route::get('/logout',[Auth::class, 'logout'])->name('logout')->middleware('authcheck');
    Route::get('/profile',[Profile::class, 'profile'])->name('profile')->middleware('authcheck');
    Route::post('/profile',[Profile::class, 'profile_update'])->name('profile')->middleware('authcheck');
    Route::get('/change-password',[Profile::class, 'change_password'])->name('change_password')->middleware('authcheck');
    Route::post('/change-password',[Profile::class, 'changed_password'])->name('change_password')->middleware('authcheck');
    Route::get('/users',[UserController::class, 'users_list'])->name('users')->middleware('authcheck');
    Route::get('/user-add',[UserController::class, 'user_add'])->name('user_add')->middleware('authcheck');
    Route::post('/user-add',[UserController::class, 'user_added'])->name('user_add')->middleware('authcheck');
    Route::get('/user-delete/{number}',[UserController::class, 'user_delete'])->middleware('authcheck');
    Route::get('/user-edit/{number}',[UserController::class, 'user_edit'])->name('user_edit')->middleware('authcheck');
    Route::post('/user-update',[UserController::class, 'user_update'])->name('user_update')->middleware('authcheck');
    Route::get('/cities',[Location::class, 'cities'])->name('cities')->middleware('authcheck');
    Route::get('/city-add',[Location::class, 'city_add'])->name('city_add')->middleware('authcheck');
    Route::post('/city-add',[Location::class, 'city_added'])->name('city_added')->middleware('authcheck');
    Route::get('/city-delete/{number}',[Location::class, 'city_delete'])->middleware('authcheck');
    Route::get('/countries',[Location::class, 'countries'])->name('countries')->middleware('authcheck');
    Route::get('/country-add',[Location::class, 'country_add'])->name('country_add')->middleware('authcheck');
    Route::post('/country-add',[Location::class, 'country_added'])->name('country_added')->middleware('authcheck');
    Route::get('/country-delete/{number}',[Location::class, 'country_delete'])->middleware('authcheck');

    Route::get('/states',[Location::class, 'states'])->name('states')->middleware('authcheck');
    Route::get('/state-add',[Location::class, 'state_add'])->name('state_add')->middleware('authcheck');
    Route::post('/state-add',[Location::class, 'state_added'])->name('state_added')->middleware('authcheck');
    Route::get('/state-delete/{number}',[Location::class, 'state_delete'])->middleware('authcheck');

    //Top Nav
    Route::get('/header/top-nav',[HeaderController::class ,'top_nav'])->name('top_nav')->middleware('authcheck');
    Route::post('/header/top-nav',[HeaderController::class, 'top_nav_updated'])->name('top_nav_updated')->middleware('authcheck');

    //Hero Section
    Route::get('/home/hero',[HeroSection::class, 'hero'])->name('hero')->middleware('authcheck');
    Route::post('/home/hero',[HeroSection::class, 'hero_updated'])->name('hero_updated')->middleware('authcheck');

});


//Website Routes
Route::get('/',[Home::class, 'home'])->name('home');

