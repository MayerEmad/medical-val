<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;
use App\Models\Category;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this-app->bind(MyFatoorahService::class,function(){
        //     return new MyFatoorahService();
        // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // $this->menuItems = ["Home", "About Us", "Contact"];
        // $this->categories_all = Category::all();
        $this->categories = Category::with('products')->paginate(3);

        view()->composer('layout', function($view) {
            $view->with(['categories' =>  $this->categories]);
        });
    }
}
