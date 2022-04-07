<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Compare;
use Session;
use Auth;
class CompareController extends Controller
{
    public function compare()
    {
        $products=[];
        $product_ids=[];
        if (Session::has('compare')){
        $product_ids=Session::get('compare');
        $products=Product::whereIn('id',$product_ids)->paginate(3);
        }
        return view('compare', compact('products'));

        // return view('compare');
    }
    public function store(Product $product)
    {
        $product_ids=[];
        array_push($product_ids,(Session::get('compare')));
        if(!in_array($product->id,$product_ids)){
            Session::push('compare', $product->id);

        }

            if(Auth::user()){
                $user= Auth::user();

                $cart=Compare::create(['product_id'=>$product->id,'user_id'=>$user->id]);

            }
        return back()->with('success', 'Item was added to your compare!');

    }
    public function removeCompare( $id)
    {
       $key=array_search($id, (Session::get('compare')));

        
        // Session::pull('Compare'.$key);
        Session::pull('compare.'.$key); // retrieving pen and removing
        if(Auth::user()){

        Compare::where([['product_id',$id],['user_id',Auth::user()->id]])->delete();
        }
        return back()->with('success', 'Item was removed from your Compare!');

    }
}
