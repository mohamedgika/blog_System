<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;

    }

    public function index(){
        $this->authorize('view',$this->user); // Secure Url
        $user = User::all();
        return view('backend.User.dashboard_user',['user'=>$user]);
    }

    public function store(StoreUserRequest $request){

        $this->authorize('update',$this->user); // Secure Url

        try{

            User::create([

                'name' => $request->name,
                'email' => $request->email,
                'status'=>$request->status,
                'password' => Hash::make($request->password),

            ]);

            session()->flash('store_user',__('backend/dashboard_message.Add User Successfully'));
            return redirect()->route('user.index');

        }
        catch(\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    }

    public function edit(Request $request,$id){

        $this->authorize('update',$this->user); // Secure Url

         User::findorFail($id);
        try{

            User::where('id',$id)->update([

                'name'=>$request->username,
                'email'=>$request->email,
                'status'=>$request->status,

            ]);

            session()->flash('edit_user',__('backend/dashboard_message.Edit User Successfully'));
            return redirect()->route('user.index');

        }
        catch(\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    }

    public function del($id){

        $this->authorize('delete',$this->user); // Secure Url

             User::findorFail($id);

            try{
                User::where('id',$id)->delete();

                session()->flash('delete_user',__('backend/dashboard_message.Deleted User Successfully'));
                return redirect()->route('user.index');

            }
            catch(\Exception $e){
                return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
            }
        }
}
