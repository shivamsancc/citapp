<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class testimonial extends Model
{
    use Sluggable;
    use HasFactory;
    protected $table = 'testimonials';
	protected $fillable = ['name','slug','discription','position','img','flag'];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    public static function getList($category='',$no='') {
		$query = self::select('testimonials.*')
						->orderBy('created_at', 'desc')
						->where('testimonials.flag', 1);

		if ($category) {
			$query = $query->where('testimonials', $category);
		}

		if ($no) {
			$query = $query->limit($no);
		}

		$result = $query->get();
		if (!is_null($result)) {
			return $result;
		}
		return null;
	}


    public static function createtestimonial($request,$img){
        $result =self::create([
			'name'=> $request['name'],
			'discription'=> $request['discription'],
			'position'=> $request['position'],
			'img'=> $img,
		]);
		return $result;
    }


    public static function getbyID($id){
		$result =self::where('id',$id)
		->where('flag',1)
		->first();
		return 	$result;
	}



    public static function updatebyID($id,$request,$img){
		$result =self::whereId($id)->update([
			'name'=> $request['name'],
			'discription'=> $request['discription'],
			'position'=> $request['position'],
			'img'=> $img,
		]);
		return $result;
	}
}
