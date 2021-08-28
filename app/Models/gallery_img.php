<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery_img extends Model
{
    use HasFactory;
    protected $table = 'gallery_imgs';
	protected $fillable = ['gallery_img_name','gallery_name','gallery_id','flag'];


    public static function creategalleryimagebyid($request,$gallery_created,$filename){
        $result =self::create([
           'gallery_img_name'=> $filename,
           'gallery_name'=> $request['gallery_name'],
           'gallery_id'=> $gallery_created,
       ]);
       if (isset($result)) {
           return $result->id;
       }
       return'';
       }
}       
