<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contact_query extends Controller
{
    public function __construct()
    {
       $this->data= \App\system::getmasterdata();
    }

    public function index()
    {
        $this->data['query']=\App\Models\contact_query::getList();
        return view('admin.contact_query.index',$this->data);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $this->data['query_details']=\App\Models\contact_query::getbyId($id);
        return view('admin.contact_query.show',$this->data);
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
        $result= \App\Models\contact_query::destroybyid($id);
        if (isset($result)) {
            return true;
        }
        return false;
    }
}
