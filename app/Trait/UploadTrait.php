<?php
namespace App\Trait;

use Illuminate\Http\Request;


trait UploadTrait
{
    public function uploadfile(Request $request , $foldername , $uploadname){

        // Local Storage  By Using FileSystems And File Upload
        $file = $request->file($uploadname);

        // $extension = $file->getClientOriginalExtension();
        $name = $file->getClientOriginalName();

        // Store Image Hashed
        // $path = $file->store('logo','imgs');
        $path = $file->storeAs($foldername,$name,'imgs');

        return $path;

    }

}
