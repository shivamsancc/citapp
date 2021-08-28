<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sliderController extends Controller
{
    public function __construct()
    {
       $this->data= \App\system::getmasterdata();
    }

    public function index()
    {
        $this->data['slider']=\App\Models\slider::getList();
        return view('admin.slider.index',$this->data);
    }


    public function create()
    {
        return view('admin.slider.create',$this->data);
    }

    public function store(Request $request)
    {
            $validator = \Validator::make($request->all() , ['slider_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg', ]);
            if ($validator->passes()){
                        $file = $request->file('slider_img');
                        $name =time().str_replace(' ', '', $file->getClientOriginalName());
                    $filename= \App\system::fileuploader('/slider',$name,$file,'public');
                    $result =\App\Models\slider::createSlider($request,$filename);
                }
        if (isset($result)) {
            alert()->success('Data has been saved Prperly push send.', 'Save Sucessfully');
            return \Redirect::route('slider.index');
        }
            alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
            return \Redirect::route('slider.index');
        
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
        $result= \App\Models\slider::destroy($id);
        if (isset($result)) {
            return true;
        }
        return false;
    }
}
