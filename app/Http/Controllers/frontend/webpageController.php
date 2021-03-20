<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//==========================custom code by shivam anand===============
use DB;
use App\Exports\UsersExport;
use App\Models\cit_certificate;
use App\Models\cit_admitcard;
use App\Models\cit_admission;
use App\Models\cit_result;
//==========================custom code by shivam anand===============
class webpageController extends Controller
{
    public function getcerificate(Request $request)
    {
        if (cit_certificate::where('sl_no',$request->sl_no)->first()) {
          $flights = cit_certificate::where('sl_no',$request->sl_no)->get();
           return view('student/certificate' ,compact('flights'));
       }else{
         alert()->error('You Data has not been found.', 'Certificate Not Found');
         return redirect()->route('homepage');
       }

    }
    public function getadmintcard(Request $request)
    {
        if (cit_admitcard::where('regno',$request->regno)->first()) {
            $flights = cit_admitcard::where('regno',$request->regno)->get();
          return view('student/admitcard' ,compact('flights'));
        }else{
          alert()->error('You Data has not been found.', 'Admitcard Not Found');
          return redirect()->route('homepage');
        }

    }


    public function getadmission(Request $request)
    {
        $flight = cit_admitcard::where('regno',$request->regno)->first();
        $flights = cit_admission::where('regno',$request->regno)->get();

    }

    public function getresult(Request $request)
    {
        // return $request->all();
        if (cit_result::where('roll',$request->roll)->first()) {
          $flights = cit_result::where('roll',$request->roll)->get();
            return view('student/result' ,compact('flights'));
        }else{
          alert()->error('You Data has not been found.', 'Result Not Found');
          return redirect()->route('homepage');
        }


    }
}
