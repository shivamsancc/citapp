<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
//=========================Cusome by shivam===============
use DB;
use App\Exports\UsersExport;
use App\Models\cit_certificate;
use App\Models\cit_admitcard;
use App\Models\cit_admission;
use App\Models\cit_result;
//===============imports===========
use App\Imports\admissionImport;
use App\Imports\certificateImport;
use App\Imports\admitcardImport;
use App\Imports\resultImport;
//=========================Cusome by shivam===============
class dashboardController extends Controller
{
  public function __construct()
    {
       $this->data= \App\system::getmasterdata();
    }


  public function dashboard(){
    return view('admin.dashboard',$this->data);
  }







    public function admissionImport(Request $request)
    {
      if (cit_admission::query()->truncate()) {
        if (Excel::import(new admissionImport,request()->file('file'))) {
          alert()->success('You Data has  been saved Prperly.', 'Saved Sucessfully');
          return redirect()->route('home');
        }

    }else {
      alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
            return redirect()->route('home');
    }
    }



    function importcerificate(Request $request)
    {
      if (cit_certificate::query()->truncate()) {
        if (Excel::import(new certificateImport,request()->file('file'))) {
          alert()->success('You Data has  been saved Prperly.', 'Saved Sucessfully');
          return redirect()->route('home');
        }

    }else {
      alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
            return redirect()->route('home');
    }
    }



    function importadmitcard(Request $request)
    {
      if (cit_admitcard::query()->truncate()) {
        if (Excel::import(new admitcardImport,request()->file('file'))) {
          alert()->success('You Data has  been saved Prperly.', 'Saved Sucessfully');
          return redirect()->route('home');
        }

    }else {
      alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
            return redirect()->route('home');
    }
    }




    function importaresult(Request $request)
    {
      if (cit_result::query()->truncate()) {
        if (Excel::import(new resultImport,request()->file('file'))) {
          alert()->success('You Data has  been saved Prperly.', 'Saved Sucessfully');
          return redirect()->route('home');
        }

    }else {
      alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
            return redirect()->route('home');
    }
    }


}
