<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class page extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = 'pages';
	protected $fillable = ['page_title', 'slug','page_body','meta_tilte','meta_keyword','meta_discription','header_code','footer_code','visiblity','status','feat_img','flag'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'page_title'
            ]
        ];
    }

    public static function createPage($request,$feat_img){
		$result =self::create([
			'page_title'=> $request['page_title'],
			'page_body'=> $request['page_body'],
			'meta_tilte'=> $request['meta_tilte'],
			'meta_keyword'=> $request['meta_keyword'],
			'meta_discription'=> $request['meta_discription'],
			'header_code'=> $request['header_code'],
			'footer_code'=> $request['footer_code'],
			'visiblity'=> $request['visiblity'],
			'status'=> $request['status'],  
			'feat_img'=> $feat_img
		]);
		return $result->id;
	}

    public static function getList($category='',$no='') {
		$query = self::select('pages.*')
						->orderBy('created_at', 'desc')
						->where('pages.flag', 1);

		if ($category) {
			$query = $query->where('pages', $category);
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
        $result=  self::where('pages.slug',$slug)
          ->where('pages.flag',1)
          ->get();
          if (isset($result)) {
              return $result;
          }
          return'';
      }


    public static function getbyID($id){
		$result =self::where('id',$id)
		->where('flag',1)
		->first();
		return 	$result;
	}


    public static function updatebyID($id,$request,$feat_img){
		$result =self::whereId($id)->update([
			'page_title'=> $request['page_title'],
			'page_body'=> $request['page_body'],
			'meta_tilte'=> $request['meta_tilte'],
			'meta_keyword'=> $request['meta_keyword'],
			'meta_discription'=> $request['meta_discription'],
			'header_code'=> $request['header_code'],
			'footer_code'=> $request['footer_code'],
			'visiblity'=> $request['visiblity'],
			'status'=> $request['status'],  
			'feat_img'=> $feat_img,
		]);
		return $result;
	}
}
