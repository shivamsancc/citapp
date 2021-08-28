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
        // dd($this->data['course']);
       return view('admin.course.index', $this->data);
    }

    public function create(){
        $this->data['coursecategory']=\App\Models\coursecategory::getList();
        return view('admin.course.create',$this->data);
    }

    
    public function store(Request $request){
        $validator = \Validator::make($request->all() , ['course_feat_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg', ]);
        if ($validator->passes()){
            $file = $request->file('course_feat_img');
            $name =time().str_replace(' ', '', $file->getClientOriginalName());
            $course_feat_img= \App\system::fileuploader('course',$name,$file,'public');
        }
        // $course_feat_img=env("APP_URL").'/storage/'.$filename;
        $course =\App\Models\course::createCourse($request->all(),$course_feat_img);
        if (isset($course)) {

            alert()->success('Data has been saved Prperly push send.', 'Save Sucessfully');
            return \Redirect::route('course.index');
        }

        alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
        return \Redirect::route('course.index');
    }

   
    public function show($id){
        //
    }

    
    public function edit($id){
        return view('admin.course.edit');
    }

    
    public function update(Request $request, $id){
        //
    }

    
    public function destroy($id){
        //
    }
}
