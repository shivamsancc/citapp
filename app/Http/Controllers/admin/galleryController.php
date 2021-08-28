<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function __construct()
    {
        $this->data = \App\system::getmasterdata();
    }

    public function index()
    {
        $this->data['gallery']=\App\Models\gallery::getList();
        return view('admin.gallery.index', $this->data);
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $gallery_created = \App\Models\gallery::creategallery($request);
        if (isset($gallery_created))
        {
            $validator = \Validator::make($request->all() , ['gallery_imgs' => 'required|image|mimes:jpeg,png,jpg,gif,svg', ]);
            if ($files = $request->file('gallery_imgs'))
            {
                foreach ($files as $file)
                {
                    $name = time() . str_replace(' ', '', $file->getClientOriginalName());
                    $filename = \App\system::fileuploader('/gallery', $name, $file, 'public');
                    $gallery_images_created = \App\Models\gallery_img::creategalleryimagebyid($request,$gallery_created,$filename);
                }
                alert()->success('Gallery has been saved Prperly push send.', 'Save Sucessfully');
                return \Redirect::route('gallery.index');
            }     
            alert()->error('You Gallery has not been saved Prperly.', 'Something Went Wrong');
            return \Redirect::route('gallery.index');
        }

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
        //
        
    }
}

