<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\ShopingCart;

use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function cart()
    {
        $total=0;
        foreach (Cart::content() as $item){
            $total+=$item->price*$item->qty;
        }
        return view('cart')->with('total',$total);;
    }
    public function store(Product $product)
    {
        // $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) {
        //     return $cartItem->id === $product->id;
        // });

        // if ($duplicates->isNotEmpty()) {
        //     return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
        // }

        Cart::add($product->id, $product->name, 1, $product->price)
            ->associate('App\Product');
            if(Auth::user()){
                $user= Auth::user();

                $cart=ShopingCart::create(['product_id'=>$product->id,'user_id'=>$user->id,'quantity'=>1]);

            }
        return back()->with('success', 'Item was added to your cart!');

    }

    /* addProductButton */
//     public function addToCart($id)
//     {
//         $product = Product::find($id);
//         if (!isset($product)) {
//             return response()->json(['message' => 'cart.unexpected error']);
//         }
//
//         $cart = session()->get('cart');
//
//         /**  if cart is empty then this the first product **/
//         if (!isset($cart)) {
//             $cart = [
//                 $id => [
//                     "name" => $product->name,
//                     "quantity" => 1,
//                     "price" => $product->price,
//                     "photo" => $product->photo
//                 ]
//             ];
//             $cart = [
//                 "productsNumber" => ["number" => 1]
//             ];
//             session()->put('cart', $cart);
//             return response()->json(['message' => 'add to cart']);
//         }
//
//         /* if cart not empty
//           then check if this product exist then increment quantity*/
//         if (isset($cart[$id])) {
//             $cart[$id]['quantity']++;
//         } else {
//             $cart[$id] = [
//                 "id" => $product->id,
//
//                 "name" => $product->name,
//                 "quantity" => 1,
//                 "price" => $product->price,
//                 "photo" => $product->photo
//             ];
//         }
//         $cart["productsNumber"]['number']++;
//
//         session()->put('cart', $cart);
//         return response()->json(['message' => 'add to cart']);
//     }

    /* removeProductButton */
    public function removeproduct($id)
    {
        $cart = session()->get('cart');
        // if(!isset($cart)){
        //     return response()->json(['message' => 'cart.unexpected error']);
        // }
        $item = Cart::get($id);
        Cart::remove($id);
        session([$item->id => null]);

        // dd($cart);
        // if (isset($cart[$id])) {
        //     $cart["productsNumber"]['number']-=$cart[$id]['quantity'];
        //     unset($cart[$id]);
        //     session()->put('cart', $cart);
        // }
        return back()->with('success', 'Successful remove operation.');


        // return response()->json(['message' => 'product removed from cart']);
    }

    /* plusButton */
    public function plusButton(Request $request)
    {
        // dd('ssgs');
        // $cart = session()->get('cart');
        // dd($cart);
        // if(!isset($cart)){
        //     return response()->json(['message' => 'cart.unexpected error']);
        // }
        // if (isset($cart[$id])) {
        //     $cart[$id]['quantity']++;
        //     $cart["productsNumber"]['number']++;
        //     session()->put('cart', $cart);
        // }
        $id=$request->rowId;
    $cart=Cart::get($id);
        Cart::update($id, $cart->qty+1);
        session()->flash('success_message', 'Quantity was updated successfully!');
        return view('cart')->with('success', 'Successful addind operation.');

    }

    /* minusButton */

    public function minusButton(Request $request)
    {
        $id=$request->rowId;

        $cart=Cart::get($id);
        if($cart->qty>1){
            Cart::update($id, $cart->qty-1);

        }
        session()->flash('success_message', 'Quantity was updated successfully!');
        return view('cart')->with('success', 'Successful decrease operation.');

    }
    public function checkout()
    {
        if(Auth::check()){
            return view('checkout');
        }
        return redirect('/login');
    }

}
