<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class newsController extends Controller
{
    
    public function __construct()
    {
        $this->data = \App\system::getmasterdata();
    }
    public function index()
    {
       $this->data['news']=\App\Models\news::getList();
       return view('admin.news.index',$this->data);
    }

   
    public function create()
    {
        return view('admin.news.create',$this->data);
    }


    public function store(Request $request)
    {
        $validator = \Validator::make($request->all() , ['feat_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg', ]);
        if ($validator->passes()){
            $file = $request->file('feat_img');
            $name =time().str_replace(' ', '', $file->getClientOriginalName());
            $feat_img= \App\system::fileuploader('/news',$name,$file,'public');
        }else{
            $feat_img=env("FILESYSTEM_DOMAIN").'/storage/upload/setting/1630174454citwebsite-header.png';
        }
        $page =\App\Models\news::createNews($request->all(),$feat_img);
        if (isset($page)) {

            alert()->success('Data has been saved Prperly push send.', 'Save Sucessfully');
            return \Redirect::route('news.index');
        }

        alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
        return \Redirect::route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['news'] =\App\Models\news::getbyID($id);
        return view('admin.news.edit',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all() , ['feat_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg', ]);
        if ($validator->passes()){
            $file = $request->file('feat_img');
            $name =time().str_replace(' ', '', $file->getClientOriginalName());
            $feat_img= \App\system::fileuploader('/news',$name,$file,'public');
        }else{
            $feat_img=env("FILESYSTEM_DOMAIN").'/storage/upload/setting/1630174454citwebsite-header.png';
        }
        $result= \App\Models\news::updatebyID($id,$request,$feat_img);
        if (isset($result)) {

            alert()->success('Data has been saved Prperly push send.', 'Save Sucessfully');
            return \Redirect::route('news.index');
        }

        alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
        return \Redirect::route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result= \App\Models\news::destroy($id);
        if (isset($result)) {
            return true;
        }
        return false;
    }


    



    
}
