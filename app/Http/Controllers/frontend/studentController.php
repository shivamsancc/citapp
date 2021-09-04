<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function __construct()
    {
      $this->data= \App\system::getmasterdata();
    }

    public function admission()
    {
        return view('frontend.student.admission',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admitcard()
    {
        return view('frontend.student.admin_card',$this->data);
    }

    
    public function result()
    {
        return view('frontend.student.result',$this->data);
    }



    public function certificate()
    {
        return view('frontend.student.certificate',$this->data);
    }

}
