<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\wishlist;
use Session;
class WishListController extends Controller
{
    public function wishlist()
    {
        $products=[];
        $product_ids=[];
        if (Session::has('wishlist')){
        $product_ids=Session::get('wishlist');
        $products=Product::whereIn('id',$product_ids)->paginate(3);
        }
        return view('wishlist', compact('products'));
    }
    public function store(Product $product)
    {
        $product_ids=[];
        array_push($product_ids,(Session::get('wishlist')));
        if(!in_array($product->id,$product_ids)){
            Session::push('wishlist', $product->id);

        }

            if(Auth::user()){
                $user= Auth::user();

                $cart=wishlist::create(['product_id'=>$product->id,'user_id'=>$user->id]);

            }
        return back()->with('success', 'Item was added to your wishlist!');

    }
    public function removewishlist( $id)
    {
       $key=array_search($id, (Session::get('wishlist')));

        
        // Session::pull('wishlist'.$key);
        Session::pull('wishlist.'.$key); // retrieving pen and removing
        wishlist::where([['product_id',$id],['user_id',Auth::user()->id]])->delete();
        
        return back()->with('success', 'Item was removed from your wishlist!');

    }
    
}
