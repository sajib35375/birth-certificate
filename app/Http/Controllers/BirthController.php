<?php

namespace App\Http\Controllers;

use App\Models\Approve;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class BirthController extends Controller
{
    public function index($id){
          $data = Form::find($id);
          $app_data = Approve::where('form_id',$id)->first();

        return view('frontend.birth_certificate',compact('data','app_data'));
    }

    public function UserInfo(){
        $all_data = Form::latest()->get();
        $all_app = Approve::all();
        return view('admin.user_profile',compact('all_data','all_app'));
    }
    public function pdfDownload($id){

         $fata = Form::first();
         $data = Form::where('user_id',$id)->first();

        $app_data = Approve::where('form_id',$fata->id)->first();


        $pdf = PDF::loadView('frontend.birth_certificate',compact('data','app_data'));
        return $pdf->download('birth_certificate.pdf');
    }
    public function Active($id){
        $active_data = Form::find($id);
        $active_data->status = false;
        $active_data->update();

        $notification = array(
            'alert_type' => 'success',
            'message' => 'status pending successful'
        );
        return redirect()->back()->with($notification);
    }
    public function InActive($id){
        $inactive_data = Form::find($id);
        $inactive_data->status = true;
        $inactive_data->update();

        $notification = array(
            'alert_type' => 'success',
            'message' => 'status approve successful'
        );
        return redirect()->back()->with($notification);
    }
    public function appEdit($id){
        $app_data = Approve::find($id);

        return view('admin.app_edit',compact('app_data'));
    }

}
