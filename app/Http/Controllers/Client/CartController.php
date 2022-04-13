<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\ShopingCart;
use Session;
use App\Http\Resources\CartResource;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    // public function cart()
    // {
    //     $total=0;
    //     if(Cart::count()){
    //         foreach (Cart::content() as $item){
    //             $total+=$item->price*$item->qty;
    //         }
    //     }
    //     return view('cart')->with('total',$total);
    // }
    public function cart()
    {
        $products=[];
        $product_ids=[];
        $total=0;
        if (Session::has('Cart')){
            
        $product_ids=Session::get('Cart');
        $products=ShopingCart::with('product')->whereIn('id',$product_ids)->paginate(3);
        // $products=Product::with('cart')->whereIn('id',$product_ids)->paginate(3);

        }
        $cart=CartResource::collection(ShopingCart::all());
        // dd($cart);
        foreach ($products as $item){
            $total+=$item->price*$item->qty;
        }
        return view('cart', compact('products','total'));

        // return view('cart');
    }
//     public function store(Product $product)
//     {
//         $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) {
//             return $cartItem->id === $product->id;
//         });
//         if ($duplicates->isNotEmpty()) {
// 
//             return back()->with('warning', 'Item is already in your cart!');
//         }
// 
//         Cart::add($product->id, $product->name, 1, $product->price)
//             ->associate('App\Product');
//             if(Auth::user()){
//                 $user= Auth::user();
// 
//                 $cart=ShopingCart::create(['product_id'=>$product->id,'user_id'=>$user->id,'quantity'=>1]);
// 
//             }
//         return back()->with('success', 'Item was added to your cart!');
// 
//     }
public function store(Product $product)
{
    $product_ids=[];
    array_push($product_ids,(Session::get('Cart')));
    if(!in_array($product->id,$product_ids)){
        Session::push('Cart', $product->id);

    }

        if(Auth::user()){
            $user= Auth::user();

            $cart=ShopingCart::create(['product_id'=>$product->id,'user_id'=>$user->id]);

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
//         $cart = session()->get('cart');
//   
//         $item = Cart::get($id);
//         Cart::remove($id);
//         session([$item->id => null]);
//         ShopingCart::where('product_id',$item->id)->delete();
// 
//         return back()->with('success', 'Successful remove operation.');

        
           $key=array_search($id, (Session::get('Cart')));
    
            
            // Session::pull('cart'.$key);
            Session::pull('Cart.'.$key); // retrieving pen and removing
            if(Auth::user()){
    
              ShopingCart::where([['product_id',$id],['user_id',Auth::user()->id]])->delete();
            }
            return back()->with('success', 'Item was removed from your cart!');
    
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
        return json_encode(['qty'=>$cart->qty]);

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
        return json_encode(['qty'=>$cart->qty,'cart'=>$cart]);

    }
    public function checkout()
    {
        //this statment handles empty cart from cart blade only
        if(Cart::count() > 0){
            $total=0;
            foreach (Cart::content() as $item){
                $total+=$item->price*$item->qty;
            }
            $data = [
                'total'  => $total,
                'products'   => Cart::content(),
            ];
            return view('checkout')->with('data',$data);
        }
        return back()->with('error', __('message.Empty Cart') );
    }

}
