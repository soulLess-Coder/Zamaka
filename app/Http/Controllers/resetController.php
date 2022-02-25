<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resetController extends Controller
{
    public function index()
    {
        return view('auth.resetpass');
    }
}

