<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media_library extends Model
{
    use HasFactory;

    protected $table = 'media_libraries';
	protected $fillable = ['name', 'slug','categories','flag'];


    public static function createmedia($name,$filePath,$categories){
        $result =self::create([
			'name'=> $name,
			'slug'=> $filePath,
			'categories'=> $categories,
            'flag'=>1,
		]);
		return $result->id;
    }

}
