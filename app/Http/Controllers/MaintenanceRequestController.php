<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FileController;
use App\Models\MaintenanceReport;
use Illuminate\Http\Request;
use App\Models\MaintenanceRequest;


class MaintenanceRequestController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @noinspection PhpUndefinedMethodInspection
     */
    public function store(Request $request)
    {
        //TODO:add more validations and various error handling (server,database etc)
        $this->validate($request, [
            'title' => 'required',
            'description',
            'category',
            'image' => 'required|image',
            'contact_number' => 'required|numeric',
        ]);

        $fileController = new FileController;
        $image_path = $fileController->storeMaintenanceImages($request);

        return MaintenanceReport::create([
                'title' => $request->title,
                'description' => $request->description,
                'category'=>$request->category,
                'image' => $image_path,
                'contact_number' => $request->contact_number,
            ]
        );
    }

    /**
     * Display a listing of the resource.
     * @mixin Eloquent
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return MaintenanceRequest::all();
    }

}
