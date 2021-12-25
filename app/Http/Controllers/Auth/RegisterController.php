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
            'cnic_number' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed'
        ]);
        //store user
        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
            'cnic_number' => Hash::make($request->cnic_number),
            'phone_number' => Hash::make($request->phone_number),
        ]);

        //sign user in
        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');
    }


    //redirect
}
