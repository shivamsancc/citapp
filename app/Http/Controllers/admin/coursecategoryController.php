<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class coursecategoryController extends Controller
{
    public function __construct()
    {
       $this->data= \App\system::getmasterdata();
    }

    public function index()
    {
        $this->data['coursecategory']=\App\Models\coursecategory::getList();
        foreach ($this->data['coursecategory'] as $inst)
        {
            $inst->parent_category_name = \App\Models\coursecategory::getparentbyID($inst->parent_category_id);
        }
        return view('admin.coursecategory.index', $this->data);
    }


    public function create()
    {
        $this->data['coursecategory']=\App\Models\coursecategory::getList();
        return view('admin.coursecategory.create', $this->data);
    }

    public function store(Request $request)
    {
       
        $coursecategory =\App\Models\coursecategory::createCourseCategory($request->all());
        if (isset($coursecategory)) {
            return \Redirect::route('coursecategory.index')->with('message', 'State saved correctly!!!');
        }
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $this->data['singlecoursecategory'] =\App\Models\coursecategory::getbyID($id);
        $this->data['coursecategory']=\App\Models\coursecategory::getList();
        return view('admin.coursecategory.edit', $this->data);

    }


    public function update(Request $request, $id)
    {
        $result= \App\Models\coursecategory::updatebyID($id,$request);
        if (isset($result)) {

            alert()->success('Data has been saved Prperly push send.', 'Save Sucessfully');
            return \Redirect::route('coursecategory.index');
        }

        alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
        return \Redirect::route('coursecategory.index');
    }


    public function destroy($id)
    {
        $result= \App\Models\coursecategory::destroy($id);
        if (isset($result)) {
            return true;
        }
        return false;
    }
}
