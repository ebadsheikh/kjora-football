<?php
namespace App\Http\Services;

use Illuminate\Http\Request;

class Media{

    public function upload(Request $request){
        $image = $request->file('image');
        if (isset($image)) {
            $image_name = $image->getClientOriginalName();
            $image_name = str_replace(" ", "_", time() . $image_name);
            $image_path = 'upload/image/';
            $image->move($image_path, $image_name);
            $image = $image_path . $image_name;
        }else{
            $image = $request->previous_img;
        }

        // session([
        //     'image' => $image
        // ]);
        return $image;
    }

    public function uploadPlayerProfile(Request $request){
        $image = $request->file('imagePlayer');
        if (isset($image)) {
            $image_name = $image->getClientOriginalName();
            $image_name = str_replace(" ", "_", time() . $image_name);
            $image_path = 'upload/image/';
            $image->move($image_path, $image_name);
            $image = $image_path . $image_name;
        }else{
            $image = $request->previous_img;
        }

        session([
            'image' => $image
        ]);
        return $image;
    }

    public function uploadFront(Request $request){
        $image = $request->file('imageFront');
        if (isset($image)) {
            $image_name = $image->getClientOriginalName();
            $image_name = str_replace(" ", "_", time() . $image_name);
            $image_path = 'upload/image/';
            $image->move($image_path, $image_name);
            $image = $image_path . $image_name;
        }else{
            $image = $request->previous_img;
        }

        return $image;
    }

    public function uploadVideo(Request $request){
        $image = $request->file('video');
        if (isset($image)) {
            $image_name = $image->getClientOriginalName();
            $image_name = str_replace(" ", "_", time() . $image_name);
            $image_path = 'upload/video/';
            $image->move($image_path, $image_name);
            $image = $image_path . $image_name;
        }else{
            $image = $request->previous_img;
        }

        return $image;
    }
}

?>
