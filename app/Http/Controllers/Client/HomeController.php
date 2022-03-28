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
        $categories = Category::paginate(5);

        // return view('index')->with(array('products', 'categories'));
        return view('index', compact('products','categories'));
    }

    public function search(Request $request)
    {
        $searchQuery=$request->query1;
        $products = Product::where('name', 'LIKE', '%' . $searchQuery . '%')->orWhere('ar_name', 'LIKE', '%' . $searchQuery . '%')->get();
        $categories = Category::where('name', 'LIKE', '%' . $searchQuery . '%')->orWhere('ar_name', 'LIKE', '%' . $searchQuery . '%')->get();
        return view('index', compact('products','categories'));
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
}
