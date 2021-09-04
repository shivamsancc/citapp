<?php

namespace App\Http\Controllers\frontend\crudcontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admissionController extends Controller
{
    public function __construct()
    {
      $this->data= \App\system::getmasterdata();
    }

    public function index()
    {
        $this->data['gender']= \App\Models\master_setting::gender();
        $this->data['maritalstatus']= \App\Models\master_setting::maritalstatus();
        $this->data['category']= \App\Models\master_setting::category();
        $this->data['proof']= \App\Models\master_setting::proof();
        return view('frontend.admission.index',$this->data);
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
       return $request->all();
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
