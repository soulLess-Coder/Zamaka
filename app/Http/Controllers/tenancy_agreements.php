<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class tenancy_agreements extends Controller
{
    public function tenent_info(Request $request){
         //TODO:add more validations and various error handling (server,database etc)

        $fileController = new FileController;
        $image_path = $fileController->storeMaintenanceImages($request);

        return Tenant::create([
                'cnic' => $request->cnic,
                'image' => $image_path,
                'contact_number' => $request
            ]
        );
    }
}
