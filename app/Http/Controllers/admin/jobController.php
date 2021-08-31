<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class jobController extends Controller
{
    public function __construct()
    {
        $this->data = \App\system::getmasterdata();
    }

    public function index()
    {
        $this->data['job']=\App\Models\job::getList();
        return view('admin.job.index', $this->data);
    }

  
    public function create()
    {
        return view('admin.job.create', $this->data);
    }

    
    public function store(Request $request)
    {
       $result=\App\Models\job::createJob($request);
       if (isset($result)) {

        alert()->success('Data has been saved Prperly push send.', 'Save Sucessfully');
        return \Redirect::route('job.index');
    }

    alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
    return \Redirect::route('job.index');
      
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
        
        $result= \App\Models\job::destroy($id);
        if (isset($result)) {
            return true;
        }
        return false;
    }
}
