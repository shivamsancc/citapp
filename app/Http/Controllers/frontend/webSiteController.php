<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class webSiteController extends Controller
{
    public function __construct()
    {
       $this->data= \App\system::getmasterdata();
    }
    public function index()
    {
        
        return View('frontend.home',$this->data);

    }

    public function aboutpage(){
        return view('frontend.pages.about',$this->data);
    }


}
