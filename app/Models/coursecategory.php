<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class coursecategory extends Model
{
    use Sluggable;
    use HasFactory;
    protected $table = 'course_categories';
	protected $fillable = ['category_name','slug','category_discription','possible_job','parent_category_id','flag'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'category_name'
            ]
        ];
    }

    public static function getList($category='') {
		$query = self::select('course_categories.*')
						->where('course_categories.flag', 1);

		if ($category) {
			$query = $query->where('course_categories', $category);
		}

		$result = $query->get();

		return $result;
	}

    public static function createCourseCategory($request){
		$result =self::create([
			'category_name'=> $request['category_name'],
			'category_discription'=> $request['category_discription'],
			'parent_category_id'=> $request['parent_category_id'],
            'possible_job'=>json_encode($request['possible_job']),
		]);
		return $result->id;
	}

    public static function getbyID($id){
		$result =self::where('id',$id)
		->where('flag',1)
		->first();
		return 	$result;
	}


    public static function updatebyID($id,$request){
		$result =self::whereId($id)->update([
            'category_name'=> $request['category_name'],
			'category_discription'=> $request['category_discription'],
			'parent_category_id'=> $request['parent_category_id']
        ]);
		return $result;
	}


    public static function getparentbyID($id){
        $result =self::where('id',$id)
		->where('flag',1)
		->first();
        if (isset($result->category_name)) {
            return 	$result->category_name;
        }
        return'';
    }
}
