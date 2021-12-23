<?php

namespace App\Providers;

use App\Models\Header;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //For Header
        $header = Header::where('id',1)->first();
        view()->share('header',$header);
    }
}
