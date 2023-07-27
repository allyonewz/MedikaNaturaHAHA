<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AppointmentExport;
use Notification;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\support\Facades\Auth;
use App\Notifications\SendEmailNotification;
use RealRashid\SweetAlert\Facades\Alert;



class AdminController extends Controller
{
    public function addview()
    { if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {return view('admin.add_doctor');
            }
            else{return redirect()->back();}
        }
        else{return redirect('login');}

    }

    public function upload(Request $request)
    {
        $doctor= new Doctor;
        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;


        $doctor->name=$request-> name;
        $doctor->phone=$request->number;
        $doctor->room=$request-> room;
        $doctor->specialty=$request->specialty;

        $doctor->save();
        Alert::success('Add Success', 'New Doctor Data Added Successfully.');
        return redirect()->back();


    }
    public function showappointments()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {

        $data=Appointment::all();
        return view('admin.showappointments',compact('data'));;
            }
            else{return redirect()->back();}
        }
        else{return redirect('login');}

    }

    public function approve($id)
{
    $data=appointment::find($id);
    $data->status='approved';
    $data->save();


    return redirect()->back();
}
public function cancelled($id)
{
    $data=appointment::find($id);
    $data->status='cancelled';
    $data->save();
    return redirect()->back();
}

public function showdoctors()
{
    $data=Doctor::all();
        return view('admin.showdoctors',compact('data'));
}
public function deletedoctor($id)
{
    $data=Doctor ::find($id);
    $data->delete();
    Alert::success('Delete Success', 'Doctor Data Deleted Successfully.');
    return redirect()->back();
}
public function updatedoctor($id)
{
    $data=Doctor::find($id);

    return view('admin.updatedoctor',compact('data'));
}

public function editdoctor(Request $request,$id)
{
    $doctor=Doctor::find($id);

    $doctor->name=$request-> name;
    $doctor->phone=$request->number;
    $doctor->room=$request-> room;
    $doctor->specialty=$request->specialty;
    $image=$request->file;
    if ($image)
    {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
    }

    $doctor->save();
    Alert::success('Edit Success', 'New Doctor Data Edited Successfully.');
    return redirect()->back();


}
public function emailview($id)
{
    $data=Appointment::find($id);
    return view('admin.email_view',compact('data'));
}


public function exportExcel()
{
    Alert::success('Download Success', 'Appointment Schedule File Downloaded Successfully.');
    return Excel::download(new AppointmentExport, 'appointment.xlsx');
}


}
