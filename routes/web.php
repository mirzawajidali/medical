<?php

use App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Admin\Dashboard;
use Illuminate\Support\Facades\Route;

//Admin
Route::prefix('admin')->group(function(){
    Route::get('/',[Auth::class, 'login'])->name('login')->middleware('alreadyloggedin');
    Route::post('/',[Auth::class, 'logged_in'])->name('login')->middleware('alreadyloggedin');
    Route::get('/dashboard',[Dashboard::class, 'dashboard'])->name('dashboard')->middleware('authcheck');
    Route::get('/logout',[Auth::class, 'logout'])->name('logout')->middleware('authcheck');

});
