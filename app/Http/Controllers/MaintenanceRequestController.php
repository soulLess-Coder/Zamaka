<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FileController;
use App\Models\MaintenanceReport;
use Illuminate\Http\Request;
use App\Models\MaintenanceRequest;


class MaintenanceRequestController extends Controller
{
    public function store(Request $request)
    {
        //TODO:add more validations and various error handling (server,database etc)
        $this->validate($request, [
            'title' => 'required',
            'description',
            'category',
            'image' => 'required|image',
            'contact_number' => 'required|numeric',
            'amount'=> 'required',
        ]);

        $fileController = new FileController;
        $image_path = $fileController->storePropertyImages($request);

        return MaintenanceReport::create([
                'title' => $request->title,
                'description' => $request->description,
                'category'=>$request->category,
                'image' => $image_path,
                'contact_number' => $request->contact_number,
                'amount' => $request->amount,
            ]
        );
    }

}
