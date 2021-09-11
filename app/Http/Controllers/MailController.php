<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Mail\adminInvitationMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function inviteadminbymail(Request $request)
    {
        //WRONG LOGIC
        if (Auth::user()->hasRole('superadmin')==false) return view('errors.401');
        $user = User::where('email', '=', $request->email)->first();
        $name=$request->name;
        $mail=$request->email;

        if($user==null)
        {
            $validated = $request->validate([
                'name' => ['required','min:5','max:30','string','unique:users','regex:/(^[\pL\p{N} _.-]+$)/u'],
                'email' => 'required|string|email|max:255|unique:users',
                'password' => ['required', 'min:8', 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x]).*$/'],//(?=.*[!$#%])
                'role' => ['required','string','regex:/(^[\pL\p{N} _.-]+$)/u'],
            ]);
            $name=$validated["name"];
            $mail=$validated["email"];
            $user = User::create([
                'name' => $name,
                'email' => $mail,
                'password' => Hash::make($validated["password"]),
                ]);
                $user->attachRole($validated["role"]);
        }

        \Mail::to($mail)->send(new \App\Mail\adminInvitationMail($name));
        return redirect()->route('admin.create')->with('success', 'Email Sent!');
    }
}
