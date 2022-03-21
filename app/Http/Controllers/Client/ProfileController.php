<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileUpdateRequest;


class ProfileController extends Controller
{
    public function show()
    {
        if(Auth::check()==null)return redirect('/login');
        $user = Auth::user();
        return view('profile')->with('user', $user);
    }

    public function update(ProfileUpdateRequest $request, User $user)
    {

        $validated = $request->validated();
        $user->id=$validated["id"];
        $user->name=$validated["name"];
        $user->email=$validated["email"];
        $user->phone=$validated["phone"];
        $user->area=$validated["area"];
        $user->block=$validated["block"];
        $user->street=$validated["street"];
        $user->floor=$validated["floor"];
        $user->departement=$validated["departement"];

        //$user->save();
        return back()->with('success', 'Successful update operation.');
    }
}
