<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SettingResource;
use App\Models\Setting;
use App\Trait\UploadTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    use UploadTrait;

    protected $setting;

    function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }


    public function index(){

        $setting = Setting::get();

        if($this->authorize('view',$this->setting)){

            return response()->json(['data'=>$setting ,'error'=>''],200);

        }else{

            return response()->json(['data'=>'' ,'error'=>'you arenot admin'],401);
        }

    }


    public function all_setting(){

        $setting = Setting::get();

        //function collection to return all data
        $setting = SettingResource::collection($setting);

        return response()->json(['data'=>$setting ,'error'=>''],200);

    }


    public function show($id){

        $setting = Setting::find($id);

        if($setting){

            $setting = SettingResource::make($setting);

            return response()->json(['data'=>$setting ,'error'=>''],200);

        }else{

            return response()->json(['data'=>'', 'error'=>'Not found'],404);
        }

    }


    public function store(Request $request){

        if($request){

                    $logo = $this->uploadfile($request,'logo','logo');

                    $favicon = $this->uploadfile($request,'favicon','favicon');


                    $setting = Setting::create([

                        'title'=>
                        [
                        'en'=>$request->en_title,
                        'ar'=>$request->ar_title,
                        ],

                        'content'=>
                        [
                        'en'=>$request->en_content,
                        'ar'=>$request->ar_content,
                        ],

                        'description'=>
                        [
                        'en'=>$request->en_description,
                        'ar'=>$request->ar_description,
                        ],

                        'logos'=>$logo,
                        'favicon'=>$favicon,
                        'facebook'=>$request->facebook,
                        'twitter'=>$request->twitter,
                        'instegram'=>$request->instagram,
                        'linkedin'=>$request->linkedin,

                    ]);

            if($setting){

            $setting = SettingResource::make($setting);

            return response()->json(['data'=>$setting ,'error'=>''],200);

            }else{
                return response()->json(['data'=>'', 'error'=>'Not found'],404);
            }

        }else{
            return response()->json(['data'=>'', 'error'=>'Bad Request'],400);
        }

    }


}
