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
       return view('admin.course.index', $this->data);
    }

    public function create(){
        $this->data['coursecategory']=\App\Models\coursecategory::getList();
        return view('admin.course.create',$this->data);
    }

    
    public function store(Request $request){
        $this->data['coursecategory']=\App\Models\course::create($request->all());
        // dd($request->all());
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
