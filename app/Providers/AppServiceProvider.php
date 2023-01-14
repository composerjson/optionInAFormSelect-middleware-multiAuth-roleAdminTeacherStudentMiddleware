<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\Models\Department;
use App\Models\Select;
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
        // way 1
        // $selects = Select::get();
        // View::share('selects',$selects); 

        // way 2
        // View::share('selects', Select::get()); 

        // way 3
        // View::composer(['welcome', 'student', 'edit','index'], function ($view) {
        //     $view->with('selects', Select::all());
        // });
    }
}
