<?php

namespace App\Http\Controllers\admin\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class masterController extends Controller
{
    public function __construct()
    {
       $this->data= \App\system::getmasterdata();
    }

    public function index()
    {
        $this->data['mastersetting']=\App\Models\master_setting::getList();
        return view('admin.master.index',$this->data);
    }

    public function create()
    {
        $this->data['field_type'] = ['text','textarea','color','select','file','url','number','tel','switch'];
        return view('admin.master.create',$this->data);
    }

    public function store(Request $request)
    {
        $setting =\App\Models\master_setting::createsetting($request->all());
        if (isset($setting)) {
            return \Redirect::route('master_edit', [$setting])->with('message', 'State saved correctly!!!');
        }
        return back();
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $this->data['settingsingel'] =\App\Models\master_setting::getbyID($id);
        return view('admin.master.edit',$this->data);
    }

  
    public function update(Request $request, $id)
    {
        if ($request->field_type == 'file') {
            $validator = \Validator::make($request->all() , ['value' => 'required|image|mimes:jpeg,png,jpg,gif,svg']);
           if ($validator->passes()){
                    $file = $request->file('value');
                    $name =time().str_replace(' ', '', $file->getClientOriginalName());
                   $valueupdate= \App\system::fileuploader( '/setting',$name,$file,'public');
                }
        }
        else{
            $valueupdate= $request->value;
        }
        $result= \App\Models\master_setting::updatebyID($id,$valueupdate);

        if (isset($result)) {

            alert()->success('Data has been saved Prperly push send.', 'Save Sucessfully');
            return \Redirect::route('master_dashboard');
        }

        alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
        return \Redirect::route('master_dashboard');
        
    }

   
    public function destroy($id)
    {
        $result= \App\Models\master_setting::destroy($id);
        if (isset($result)) {
            alert()->success('Data has been Deleted Prperly push send.', 'Deleted Sucessfully');
            return \Redirect::route('master_dashboard');
        }
        alert()->error('You Data has not been Deleted Prperly.', 'Something Went Wrong');
        return \Redirect::route('master_dashboard');
    }
}
