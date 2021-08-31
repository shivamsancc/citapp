<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class job extends Model
{
    use Sluggable;
    use HasFactory;
    protected $table = 'jobs';
	protected $fillable = ['job_name','slug','about_job','meta_tilte','meta_keyword','meta_discription','flag'];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'job_name'
            ]
        ];
    }

    public static function getList($category='',$no='') {
		$query = self::select('jobs.*')
						->orderBy('created_at', 'desc')
						->where('jobs.flag', 1);

		if ($category) {
			$query = $query->where('jobs', $category);
		}

		if ($no) {
			$query = $query->limit($no);
		}

		$result = $query->get();

		return $result;
	}


    public static function createJob($request){
        $result =self::create([
			'job_name'=> $request['job_name'],
			'about_job'=> $request['about_job'],
		]);
		return $result;
    }
}
