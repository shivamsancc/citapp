<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class course extends Model
{
    use Sluggable;
    use HasFactory;
    protected $table = 'courses';
	protected $fillable = ['course_name','slug','course_discription','student_learn','course_outcome','no_of_lession','duration','prequisite','certification','categories','course_curricularm','course_feat_img','flag'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'course_name'
            ]
        ];
    }

    public static function getList($category='',$no='') {
		$query = self::select('courses.*')
						->orderBy('created_at', 'desc')
						->where('courses.flag', 1);

		if ($category) {
			$query = $query->where('courses', $category);
		}

		if ($no) {
			$query = $query->limit($no);
		}

		$result = $query->get();

		return $result;
	}


    public static function createCourse($request,$course_feat_img){
		$result =self::create([
			'course_name'=> $request['course_name'],
			'course_discription'=> $request['course_discription'],
			'student_learn'=> $request['student_learn'],
			'course_outcome'=> $request['course_outcome'],
			'no_of_lession'=> $request['no_of_lession'],
			'duration'=> $request['duration'],
			'prequisite'=> $request['prequisite'],
			'certification'=> $request['certification'],
			'course_curricularm'=> $request['course_curricularm'],  
			'course_feat_img'=> $course_feat_img,  
            'categories'=>json_encode($request['categories']),
		]);
		return $result->id;
	}

	public static function getCoursebyslug($slug){
		$query = self::select('courses.*')
						->where('courses.slug', $slug)
						->where('courses.flag', 1);
		$result = $query->first();

		return $result;
	}



}
