<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;
    protected $table = 'sliders';
	protected $fillable = ['mini_text', 'text_one','text_two','slider_img','slug','flag'];

    public static function getList($category='') {
		$query = self::select('sliders.*')
						->where('sliders.flag', 1);

		if ($category) {
			$query = $query->where('category', $category);
		}

		$result = $query->get();

		return $result;
	}

    public static function createSlider($request,$filename){
        $result= self::create([
            'mini_text'=> $request['mini_text'],
			'text_one'=>  $request['text_one'],
			'text_two'=>  $request['text_two'],
			'slider_img'=> $filename,
			'slug'=> $filename,
            'flag'=>1,
        ]);
        if (isset($result)) {
            return $result;
        }
        return '';
    }
}
