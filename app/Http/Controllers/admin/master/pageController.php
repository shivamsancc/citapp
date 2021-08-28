<?php

namespace App\Http\Controllers\admin\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function __construct()
    {
       $this->data= \App\system::getmasterdata();
    }

    public function index()
    {
       $this->data['page']=\App\Models\page::getList();
       return view('admin.page.index',$this->data);
    }


    public function create()
    {
        return view('admin.page.create',$this->data);
    }

    public function store(Request $request)
    {

        $validator = \Validator::make($request->all() , ['feat_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg', ]);
        if ($validator->passes()){
            $file = $request->file('feat_img');
            $name =time().str_replace(' ', '', $file->getClientOriginalName());
            $feat_img= \App\system::fileuploader('/page',$name,$file,'public');
        }else{
            $feat_img=env("FILESYSTEM_DOMAIN").'/storage/upload/setting/1630174454citwebsite-header.png';
        }
        $page =\App\Models\page::createPage($request->all(),$feat_img);
        if (isset($page)) {

            alert()->success('Data has been saved Prperly push send.', 'Save Sucessfully');
            return \Redirect::route('page.index');
        }

        alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
        return \Redirect::route('page.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
       $this->data['page'] =\App\Models\page::getbyID($id);
        return view('admin.page.edit', $this->data);
    }

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all() , ['feat_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg', ]);
        if ($validator->passes()){
            $file = $request->file('feat_img');
            $name =time().str_replace(' ', '', $file->getClientOriginalName());
            $feat_img= \App\system::fileuploader('/page',$name,$file,'public');
        }else{
            $feat_img=env("FILESYSTEM_DOMAIN").'/storage/upload/setting/1630174454citwebsite-header.png';
        }
        $result= \App\Models\page::updatebyID($id,$request,$feat_img);
        if (isset($result)) {

            alert()->success('Data has been saved Prperly push send.', 'Save Sucessfully');
            return \Redirect::route('page.index');
        }

        alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
        return \Redirect::route('page.index');
    }

    public function destroy($id)
    {
        //
    }
}
