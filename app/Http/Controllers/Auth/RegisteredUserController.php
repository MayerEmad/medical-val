<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request)
    {
        $validated =$request->validated();
        //dd($validated);

        Auth::login($user = User::create([
            'name' => $validated["name"],
            'email' => $validated["email"],
            'password' => Hash::make($validated["password"]),
        ]));
        event(new Registered($user));
        $user->attachRole($validated["role"]);
        return redirect(RouteServiceProvider::HOME);

        //if($validated["role"]=='customer')
        //else     return redirect(Route('admin.index'));
    }
}
