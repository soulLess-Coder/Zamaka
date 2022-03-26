<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DisplayListingsController extends Controller
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        $request = Request::create('/api/listings', 'GET');
        $response = app()->handle($request);
        $listings = json_decode($response->getContent());
        return view('tenant.listings', ['listings' => $listings]);
    }
}
