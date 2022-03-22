<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
            'role' => 'required'
        ]);

        //store user
        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email'=> $request->email,
            'role' => $request->role,
            'phone_number' => $request->phone_number,
        ]);

        //sign user in
        Auth::attempt($request->only('email', 'password'));
        $role=Auth::user()->role;
        if($role == "Owner"){
            return redirect()->route('owner');
        }

        return redirect()->route('listings');
    }
    //redirect
}
