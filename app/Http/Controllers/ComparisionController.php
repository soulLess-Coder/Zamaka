<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComparisionController extends Controller
{
    public function index()
    {
        return view('tenant.compare');
    }
}
