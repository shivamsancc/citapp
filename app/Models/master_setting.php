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


	public static function gender(){
		return $gender=[null=>'Select', 'male'=>'MALE','female'=>'Female','other'=>'Others'];
	}

	public static function maritalstatus(){
		return $gender=[null=>'Select', 'single'=>'Single','married'=>'Married','divorced'=>'Divorced','widowod'=>'Widowod'];
	}

	public static function category(){
		return $gender=[null=>'Select', 'sc'=>'SC','st'=>'ST','ebc'=>'EBC','ews'=>'EWS','general'=>'GENERAL','physicallychallenged'=>'PHYSICALLY CHALLENGED'];
	}

	public static function proof(){
		return $gender=[null=>'Select', 'aadhar_card'=>'Aadhar Card','voterid_card'=>'VoterID Card','pan_card'=>'PAN Card','10th_marksheet'=>'10th Marksheet'];
	}


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
			'field_type'=> $request['field_type'],
			'value'=> null
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
