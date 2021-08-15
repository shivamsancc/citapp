<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class course extends Model
{
    use Sluggable;
    use HasFactory;
    protected $table = 'course_categories';
	protected $fillable = ['course_name','slug','course_discription','student_learn','course_outcome','no_of_lession','duration','prequisite','certification','categories','course_curricularm','course_feat_img','flag'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'course_name'
            ]
        ];
    }
}
