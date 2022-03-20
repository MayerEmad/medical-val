<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class ProfileController extends Controller
{
    public function show()
    {
        if(Auth::check()==null)return redirect('/login');
        $user = Auth::user();
        return view('profile')->with('user', $user);
    }


}
