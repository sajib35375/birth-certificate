<?php

namespace App\Http\Controllers;

use App\Models\Approve;
use App\Models\Form;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function ShowForm($id){

        return view('admin.profile.user_form',compact('id'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'reg_no' => 'required',
            'pin' => 'required',
        ]);
        Approve::create([
            'form_id' => $request->form_id,
            'registration_number' => $request->reg_no,
            'month' => $request->month,
            'day' => $request->day,
            'year' => $request->year,
            'Cmonth' => $request->Cmonth,
            'Cday' => $request->Cday,
            'Cyear' => $request->Cyear,
            'pin' => $request->pin,
        ]);
        $notification = array(
            'alert_type' => 'success',
            'message' => 'Data inserted successfully'
        );
        return redirect()->route('user.info')->with($notification);
    }
}
