<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceReport;
use App\Models\MaintenanceRequest;
use Illuminate\Http\Request;

class MaintenanceRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        MaintenanceRequest::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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

        return MaintenanceRequest::create([
                'title' => $request->title,
                'description' => $request->description,
                'category'=>$request->category,
                'image' => $image_path,
                'contact_number' => $request->contact_number,
            ]
        );
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
