<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;
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
        // $master_settings = array();
        // $masters=DB::table('master_settings')->where('status',1)->get();
        //     foreach($masters as $master){
        //         $master_settings[$master->name]= $master->value;
        //     }
        // View::share('master_settings', $master_settings);
    }
}
