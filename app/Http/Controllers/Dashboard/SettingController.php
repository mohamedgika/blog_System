<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Setting;
use App\Trait\UploadTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSettingRequest;

class SettingController extends Controller
{
    use UploadTrait;

    protected $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function index()
    {
        $this->authorize('view',$this->setting); // Secure
        $setting = Setting::all();
        return view('backend.Setting.dashboard_setting',['setting'=>$setting]);
    }


    public function create()
    {
        //
    }


    public function store(StoreSettingRequest $request)
    {
        try{

            // Function To Save In Storage With Folder Name
            $logo = $this->uploadfile($request,'logo','logo');
            
            $favicon = $this->uploadfile($request,'favicon','favicon');

            Setting::create([

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

                'user_id'=>auth()->user()->id,
                'logos'=>$logo,
                'favicon'=>$favicon,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'instegram'=>$request->instagram,
                'linkedin'=>$request->linkedin,

            ]);

            session()->flash('add_setting',__('backend/dashboard_message.Add Setting Successfully'));
            return redirect()->route('setting.index');

        }
        catch(\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
