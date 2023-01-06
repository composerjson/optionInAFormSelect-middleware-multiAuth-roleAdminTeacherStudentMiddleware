<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\Models\Department;
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
        // $d = Department::all();
        // View::share('d',$d); 

        // way 2
        // View::share('d', Department::get()); 

        // way 3
        View::composer(['welcome','student'], function ($view) {
            $view->with('d', Department::orderByDesc('created_at')->paginate());
        });
    }
}
