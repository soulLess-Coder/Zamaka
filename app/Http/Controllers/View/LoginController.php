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

    public function login()
    {
        $client = new Client();
//        $request = $client->createRequest('POST', 'http://localhost:8000/api/auth/login');
//        $response = $client->send($request);
        $response = $client->post('http://localhost:8000/api/auth/login');
//        $request = Request::create('', 'POST');
//        $response = app()->handle($request);
        $user = $response->json();
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
