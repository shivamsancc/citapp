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
        $this->data['news']=\App\Models\news::getList('',6  );
        $this->data['course']=\App\Models\course::getList('',6);
        $this->data['testimonials']=\App\Models\testimonial::getList('',3);
        $this->data['slider']=\App\Models\slider::getList();
        return View('frontend.home',$this->data);

    }

    public function aboutpage(){
        return view('frontend.pages.about',$this->data);
    }

    public function coursepage(){
        $this->data['course']=\App\Models\course::getList();
        return view('frontend.pages.course',$this->data);
    }

    public function onecoursepage($slug){
        $this->data['course']=\App\Models\course::getList();
        $this->data['coursecategory']=\App\Models\coursecategory::getList();
        $this->data['onecoursepage']=\App\Models\course::getCoursebyslug($slug);
        return view('frontend.pages.onecoursepage',$this->data);
    }

    
    public function gallery(){
        $this->data['gallery']=\App\Models\gallery::getList();
        return view('frontend.pages.gallery',$this->data);
    }

    public function gallerysingle($slug){
        $this->data['onegallery']=\App\Models\gallery::getbyslug($slug);
        return view('frontend.pages.onegallery',$this->data);
    } 

    public function contact(){
        return view('frontend.pages.contact',$this->data);
    }

    public function dynamicpage($slug){
        $this->data['page']=\App\Models\page::getbyslug($slug);
        dd($this->data);
        return view('frontend.pages.contact',$this->data);
    }

//==================Post Methods===================
    public function postcontactform( Request $request){
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        $cookie=$_COOKIE['ConnectoID'];
        $cookie_id=\App\Models\visitor::checkbyCookie($cookie);
        $result=\App\Models\contact_query::createContactquery($request,$cookie_id);
        if (isset($result)) {
            alert()->success('Query has been Sent.', 'Sent Sucessfully');
            return back();
        }
            alert()->error('You Query has not been saved Prperly.', 'Something Went Wrong');
            return \Redirect::route('home');
    }

}
