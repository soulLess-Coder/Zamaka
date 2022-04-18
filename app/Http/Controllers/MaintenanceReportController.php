<?php

namespace App\Http\Controllers;


use App\Models\MaintenanceReport;
use App\Http\Controllers\FileController;
use Illuminate\Http\Request;

class MaintenanceReportController extends Controller
{
    //TODO: Remove this controller and copy paste its code to ListingController
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MaintenanceReport::all();
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
            'video'=> 'required',
            'amount'=> 'required',
        ]);

        $fileController = new FileController;
        $image_path = $fileController->storePropertyImages($request);
        $video_path = $fileController->storeVideo($request);
        return MaintenanceReport::create([
            'title' => $request->title,
                'description' => $request->description,
                'category'=>$request->category,
                'image' => $image_path,
                'video' => $video_path,
                'amount' => $request->amount,
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
