<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function storeAvatar(Request $request){
        $this->validate($request, [
            'avatar'=> 'required|image'
        ]);
        $uploadFolder = 'users';
        $image = $request->file('avatar');
        $image_path = $image->store($uploadFolder, 'public');
        return $image_path;
    }

    public function storePropertyImages(Request $request){
        $this->validate($request, [
            'image'=> 'required|image'
        ]);
        $uploadFolder = 'users';
        $image = $request->file('image');
        $image_path = $image->store($uploadFolder, 'public');
        return $image_path;
    }
}
