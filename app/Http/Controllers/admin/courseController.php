<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class courseController extends Controller
{
    public function __construct()
    {
       $this->data= \App\system::getmasterdata();
    }

   
    public function index(){
        $this->data['course']=\App\Models\course::getList();
        foreach ($this->data['course'] as $inst)
        {
            foreach(json_decode($inst->categories,true) as $ins ){
                $inst->course_category_name = \App\Models\coursecategory::getparentbyID($ins);
            }  
        }
       return view('admin.course.index', $this->data);
    }

    public function create(){
        $this->data['coursecategory']=\App\Models\coursecategory::getList();
        return view('admin.course.create',$this->data);
    }

    
    public function store(Request $request){
        $validator = \Validator::make($request->all() , ['course_feat_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp', ]);
        if ($validator->passes()){
            $file = $request->file('course_feat_img');
            $name =time().str_replace(' ', '', $file->getClientOriginalName());
            $course_feat_img= \App\system::fileuploader('course',$name,$file,'public');
        }
        $course =\App\Models\course::createCourse($request->all(),$course_feat_img);
        if (isset($course)) {

            alert()->success('Data has been saved Prperly push send.', 'Save Sucessfully');
            return \Redirect::route('course.index');
        }

        alert()->error('You Data has not been saved Properly.', 'Something Went Wrong');
        return \Redirect::route('course.index');
    }

   
    public function show($id){
        //
    }

    
    public function edit($id){
        $this->data['coursecategory']=\App\Models\coursecategory::getList();
        $this->data['course'] =\App\Models\course::getbyID($id);
        return view('admin.course.edit',$this->data);
    }

    
    public function update(Request $request, $id){
        $validator = \Validator::make($request->all() , ['course_feat_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp', ]);
        if ($validator->passes()){
            $file = $request->file('course_feat_img');
            $name =time().str_replace(' ', '', $file->getClientOriginalName());
            $course_feat_img= \App\system::fileuploader('course',$name,$file,'public');
        }
        else{
            $course_feat_img=\App\Models\course::getbyID($id)->course_feat_img;
        }
        $course =\App\Models\course::createCourse($request->all(),$course_feat_img);
        if (isset($course)) {

            alert()->success('Data has been saved Prperly push send.', 'Save Sucessfully');
            return \Redirect::route('course.index');
        }

        alert()->error('You Data has not been saved Properly.', 'Something Went Wrong');
        return \Redirect::route('course.index');
    }

    
    public function destroy($id){
        $result= \App\Models\course::destroy($id);
        if (isset($result)) {
            return true;
        }
        return false;
    }
}
