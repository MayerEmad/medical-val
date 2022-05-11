<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

use App;


class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        $saleProducts = Product::where('discount','>=',50)->get(); //dd($saleProducts);
        $categories = Category::where('parent_id',0)->get();
        return view('index', compact('products','categories','saleProducts'));
    }
    public function search(Request $request)
    {
        $searchQuery=$request->pname;
        $products = Product::where(function ($query) use($searchQuery){
                                if (session()->get('locale') == 'ar')
                                    $query->where('ar_name', 'LIKE', '%' . $searchQuery . '%');
                                else
                                    $query->where('name', 'LIKE', '%' . $searchQuery . '%');
                            })->get();
        $categories = Category::where('parent_id',0)->get();
        $parentCat=$subCat=null;
        return view('shop', compact('products','categories','parentCat','subCat'));
    }
    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }
    public function filter(Request $request)
    {
        preg_match_all('!\d+!', $request->text, $prices);

        $products = Product::wherebetween('price', $prices)->get();
        $categories = Category::paginate(5);

        return view('index', compact('products','categories'));
    }

    // public function fetchCategories()
    // {
    //     $categoriesArr=[];
    //     $parentCategories = Category::where('parent_id',0)->get();
    //     $categories=Category::all();

    //     foreach($parentCategories as $parent){
    //         $arr=[];
    //         $arr[]=$parent;
    //         foreach($categories as $cat){
    //             if($cat->parent_id==$parent->id){
    //                 $arr[]=$cat;
    //             }
    //         }
    //         array_push($categoriesArr,$arr);
    //     }
    //     return $categoriesArr;
    // }
}
