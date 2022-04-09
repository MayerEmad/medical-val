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

        $this->categoriesArr=[];

        $this->parentCategories = Category::where('parent_id',0)->get();
        $this->categories=Category::all();
        foreach($this->parentCategories as $parent){
            $this->arr=[];
            $this->arr[]=$parent;
            foreach($this->categories as $cat){
                if($cat->parent_id==$parent->id){
                    $this->arr[]=$cat;
                }
            }
            array_push($this->categoriesArr,$this->arr);
        }

        view()->composer('layout', function($view) {
            $view->with(['categoriesArr' => $this->categoriesArr ]);
        });
    }
}
