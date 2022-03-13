<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;



class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('index')->with('products', $products);
    }
    
    public function search(Request $request)
    {
        $searchQuery=$request->query1;
        $products = Product::where('name', 'LIKE', '%' . $searchQuery . '%')->orWhere('ar_name', 'LIKE', '%' . $searchQuery . '%')->get();

        if ($products->isEmpty()) {
            $response = [
                'error' => __('client::messages.no-clients-matched-with-the-entered-query')
            ];
        } else {
            $response = [
                'products' => $products
            ];
        }
        return view('index')->with('products', $products);

        // return response()->json($response);
    }
}
