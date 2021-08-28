<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class gallery extends Model
{
    use Sluggable;
    use HasFactory;
    protected $table = 'galleries';
	protected $fillable = ['gallery_name','slug','about_gallery','flag'];
    
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'gallery_name'
            ]
        ];
    }


    public static function creategallery($request){
        $result =self::create([
            'gallery_name'=> $request['gallery_name'],
            'about_gallery'=> $request['about_gallery'],
        ]);
        if (isset($result)) {
            return $result->id;
        }
        return'';
    }

    public static function getList($category='',$no='') {
		$query = self::select('galleries.*')
						->orderBy('created_at', 'desc')
						->where('galleries.flag', 1);

		if ($category) {
			$query = $query->where('galleries', $category);
		}

		if ($no) {
			$query = $query->limit($no);
		}

		$result = $query->get();
        foreach ($result as $inst)
        {
            $inst->thumbnail = gallery_img::where('gallery_id',$inst->id)->pluck('gallery_img_name')->first();
        }
		return $result;
	}


    public static function getbyslug($slug){
      $result=  self::leftJoin('gallery_imgs', 'galleries.id', '=', 'gallery_imgs.gallery_id')
        ->where('galleries.slug',$slug)
        ->where('galleries.flag',1)
        ->get();
        if (isset($result)) {
            return $result;
        }
        return'';
    }

}
