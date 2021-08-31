<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testimonialController extends Controller
{
    public function __construct()
    {
        $this->data = \App\system::getmasterdata();
    }

    public function index()
    {
        $this->data['testimonial']=\App\Models\testimonial::getList();
        return view('admin.testimonial.index', $this->data);
    }


    public function create()
    {
        return view('admin.testimonial.create', $this->data);
    }

    
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all() , ['img' => 'required|image|mimes:jpeg,png,jpg,gif,svg' ]);
        if ($validator->passes()){
            $file = $request->file('img');
            $name =time().str_replace(' ', '', $file->getClientOriginalName());
            $img= \App\system::fileuploader('/testimonial',$name,$file,'public');
        }else{
            $img=env("FILESYSTEM_DOMAIN").'/storage/upload/setting/1630174454citwebsite-header.png';
        }
        $page =\App\Models\testimonial::createtestimonial($request->all(),$img);
        if (isset($page)) {

            alert()->success('Data has been saved Prperly push send.', 'Save Sucessfully');
            return \Redirect::route('testimonial.index');
        }
        alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
        return \Redirect::route('testimonial.index');
    }

    public function show($id)
    {
       
    }

    public function edit($id)
    {
        $this->data['testimonial'] =\App\Models\testimonial::getbyID($id);
        return view('admin.testimonial.edit', $this->data);
    }

  
    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all() , ['img' => 'required|image|mimes:jpeg,png,jpg,gif,svg', ]);
        if ($validator->passes()){
            $file = $request->file('img');
            $name =time().str_replace(' ', '', $file->getClientOriginalName());
            $img= \App\system::fileuploader('/page',$name,$file,'public');
        }else{
            $img=env("FILESYSTEM_DOMAIN").'/storage/upload/setting/1630174454citwebsite-header.png';
        }
        $result= \App\Models\testimonial::updatebyID($id,$request,$img);
        if (isset($result)) {

            alert()->success('Data has been saved Prperly push send.', 'Save Sucessfully');
            return \Redirect::route('testimonial.index');
        }

        alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
        return \Redirect::route('testimonial.index');
    }


    public function destroy($id)
    {
        $result= \App\Models\testimonial::destroy($id);
        if (isset($result)) {
            return true;
        }
        return false;
    }
}
