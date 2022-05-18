<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
//        $client = new Client();
//        $r = $client->request('POST', 'http://localhost:8000/api/auth/login', [
//            'form_params' => [
//                'email' => $request->email,
//                'password' => $request->password,
//            ]
//        ]);
//        $response = $client->send($r);
        //$response = $client->post('http://localhost:8000/api/auth/login');

        $r = Request::create('http://localhost:8000/api/auth/login', 'POST',[
               'email' => $request->email,
               'password' => $request->password,
        ]);
        $response = app()->handle($r);
        $user = $response->getContent();
        $code = $response->getStatusCode();
        //$role = Request::parseHeader($request, 'role');
        dd($user);
        if($code == 200){
            switch ($role){
                case 'user':
                    return view('index');
                    break;
            }

        }

    }
}
