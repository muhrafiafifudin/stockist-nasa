<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\View;
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
        $categories = Category::all();
        $subCategories = SubCategory::all();

        View::share(compact('categories', 'subCategories'));

        // view()->composer('*', function ($view) {
        //     $view->with('categories', Category::all());
        // });
    }
}
