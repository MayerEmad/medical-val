<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ShopingCart;

use Gloudemans\Shoppingcart\Facades\Cart;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
        /*update cart after login*/
        if(Cart::count()>0){
            $user= Auth::user();
          
            foreach (Cart::content() as $item){
                $cart=ShopingCart::create(['product_id'=>$item->id,'user_id'=>$user->id,'quantity'=>1]);

            }
        }else{
            $user= Auth::user();
            $carts=ShopingCart::where('user_id',$user->id)->get();
            foreach ($carts as $cart){
                Cart::add($cart->product->id, $cart->product->name,$cart->quantity, $cart->product->price);
            }
          

        }
        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
