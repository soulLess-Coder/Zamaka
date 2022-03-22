<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(! $token = Auth::attempt($request->only('email', 'password'))){
            return response()->json(['error' => 'Unauthorized'], 401);
        }

//        $role = Auth::user()->role;
//        switch($role){
//            case "Owner":
//                return redirect('owner');
//                break;
//            case "Tenant":
//                return redirect()->route('listings');
//                break;
//            case "Admin":
//                return redirect()->route('admin');
//                break;
//            case "Agent":
//                return redirect()->route('agent');
//                break;
//        }
        return $this->createNewToken($token);
    }
}
