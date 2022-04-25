<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class FileController extends Controller
{
    //TODO: Add more validation and try to change the method so there is no need to pass the entire request
    public function storeAvatar(Request $request){

        $uploadFolder = 'users';
        $image = $request->file('avatar');
        $image_path = $image->store($uploadFolder, 'public');
        return $image_path;
    }

    public function storeMaintenanceImages(Request $request){

        $uploadFolder = 'maintenanceImages';
        $image = $request->file('image');
        $image_path = $image->store($uploadFolder, 'public');
        return $image_path;
    }

    public function storePropertyImages(Request $request){

        $uploadFolder = 'propertyImages';
        $image = $request->file('image');
        $image_path = $image->store($uploadFolder, 'public');
        return $image_path;
    }

    public function storeVideo(Request $request){

        $uploadFolder = 'propertyVideos';
        $video = $request->file('video');
        $video_path = $video->store($uploadFolder, 'public');
        return $video_path;
    }
}
