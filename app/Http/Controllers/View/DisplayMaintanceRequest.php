<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisplayMaintanceRequest extends Controller
{
    //

    public function index()
    {
        $request = Request::create('/api/MaintenanceRequest', 'GET');
        $response = app()->handle($request);
        $tablerow = json_decode($response->getContent());
        return view('tenant.MaintenanceRequestPage',  compact('tablerow'));
    }
}
