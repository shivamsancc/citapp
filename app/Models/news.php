<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class news extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = 'news';
	protected $fillable = ['news_title', 'slug','news_body','visiblity','status','feat_img','flag'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'news_title'
            ]
        ];
    }

    public static function getList($category='',$no='',$status='',$visiblity='') {
		$query = self::select('news.*')
						->orderBy('created_at', 'desc')
						->where('news.flag', 1);

		if ($category) {
			$query = $query->where('news', $category);
		}

		if ($no) {
			$query = $query->limit($no);
		}
        if ($status) {
			$query = $query->where('status',$status);
		}
        if ($visiblity) {
			$query = $query->where('status',$visiblity);
		}

		$result = $query->get();

		return $result;
	}


    public static function createNews($request,$feat_img){
		$result =self::create([
			'news_title'=> $request['news_title'],
			'news_body'=> $request['news_body'],
			'visiblity'=> $request['visiblity'],
			'status'=> $request['status'],  
			'feat_img'=> $feat_img
		]);
		return $result->id;
	}


    public static function getbyID($id){
		$result =self::where('id',$id)
		->where('flag',1)
		->first();
		return 	$result;
	}

	public static function updatebyID($id,$request,$feat_img){
		$result =self::whereId($id)->update([
			'news_title'=> $request['news_title'],
			'news_body'=> $request['news_body'],
			'visiblity'=> $request['visiblity'],
			'status'=> $request['status'],  
			'feat_img'=> $feat_img
		]);
		return $result;
	}
}
