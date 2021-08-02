<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Image;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function profile(){
        $data = Admin::find(1);
        return view('admin.profile.admin_profile',compact('data'));
    }
    public function profileEdit(){
        $data = Admin::find(1);
        return view('admin.profile.profile_edit',compact('data'));
    }
    public function profileUpdate(Request $request){
        $update_data = Admin::find(1);

        if ($request->hasFile('photo')){
            $image = $request->file('photo');
            $unique_name =  hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,400)->save('profile/images/'.$unique_name);
        }else{
            $unique_name = $request->old_photo;
        }


        $update_data->name = $request->name;
        $update_data->email = $request->email;
        $update_data->profile_photo_path = $unique_name;
        $update_data->update();

        $notification = array(
            'alert_type' => 'success',
            'message' => 'data updated successfully'
        );
        return redirect()->route('admin.profile')->with($notification);
    }
    public function ChangePassword(){
        return view('admin.profile.change_password');
    }
    public function UpdatePassword(Request $request){
        $this->validate($request,[
            'current' => 'required',
            'password' => 'required|confirmed',
        ]);
        $update_pass = Admin::find(1);
        if (password_verify($request->current,$update_pass->password)){
            $update_pass->password = password_hash($request->password,PASSWORD_DEFAULT);
            $update_pass->update();
        }
        $notification = array(
            'alert_type' => 'success',
            'message' => 'password updated successfully',
        );
        return redirect()->route('admin.profile')->with($notification);

    }
}
