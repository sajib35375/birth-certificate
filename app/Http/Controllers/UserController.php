<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function LoginRegister(){
        return view('frontend.index');
    }

    public function ShowUser(){
        return view('dashboard');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'Fname' => 'required',
            'Mname' => 'required',
            'address' => 'required',
            'place' => 'required',
        ]);
       Form::create([
           'user_id' => Auth::id(),
            'name' => $request->name,
           'father_name' => $request->Fname,
           'mother_name' => $request->Mname,
           'month' => $request->dob_month,
           'date' => $request->dob_day,
           'year' => $request->dob_year,
           'address' => $request->address,
           'birth_place' => $request->place,
       ]);
       $notification = array(
           'alert_type' => 'success',
           'message' => 'form submitted successfully'
       );
       return redirect()->back()->with($notification);
    }
    public function ChangePass(){
        return view('frontend.user.change_password');

    }
    public function UpdatePass(Request $request){
//        $this->validate($request,[
//           'current_pass' => 'required',
//           'new_pass' => 'required|confirmed',
//
//        ]);

        $hash_pass = Auth::user()->password;

        if (password_verify($request->current_pass,$hash_pass)){
            $id = Auth::id();
            $pass_data = User::find($id);
            $pass_data->password = password_hash($request->new_pass,PASSWORD_DEFAULT);
            $pass_data->update();

            $notification = array(
                'alert_type' => 'success',
                'message' => 'password change successfully'
            );
            return redirect()->back()->with($notification);

        }

    }

}
