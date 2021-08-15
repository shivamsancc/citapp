<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class master_setting extends Model
{
    use HasFactory;

    protected $table = 'master_settings';
	protected $fillable = ['key', 'label', 'field_type','value','category','options'];

    public static function getValues($category='') {
		$query = DB::table('master_settings')
						->select('master_settings.*')
						->where('master_settings.flag', 1);

		if ($category) {
			$query = $query->where('category', $category);
		}

		$result = $query->get();

		$list = [];
		foreach ($result as $row) {
			$list[$row->key] = $row->value;
		}

		return $list;
	}
	public static function getList($category='') {
		$query = DB::table('master_settings')
						->select('master_settings.*')
						->where('master_settings.flag', 1);

		if ($category) {
			$query = $query->where('category', $category);
		}

		$result = $query->get();

		return $result;
	}




	public static function createSetting($request){
		$result =self::create([
			'key'=> $request['key'],
			'label'=> $request['label'],
			'field_type'=> $request['field_type']
		]);
		return $result->id;
	}


	public static function getbyID($id){
		$result =self::where('id',$id)
		->where('flag',1)
		->first();
		return 	$result;
	}

	public static function updatebyID($id,$valueupdate){
		$result =self::whereId($id)->update(['value'=> $valueupdate]);
		return $result;
	}

}
