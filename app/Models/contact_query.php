<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_query extends Model
{
    use HasFactory;
    protected $table = 'contact_queries';
	protected $fillable = ['name','email','phone','query','cookie_id','flag'];

    public static function createContactquery($request,$cookie_id){
        $result =self::create([
			'name'=> $request['name'],
			'phone'=> $request['phone'],
			'email'=> $request['email'],
            'query'=>$request['query'],
            'cookie_id'=>$cookie_id,
		]);
        if (isset($result)) {
            return $result->id;
        }
        return'';
    }


    public static function quertcount(){
        $result= self::where('flag',1)
        ->count();
        return $result;
    }


    public static function getList($category='',$no='') {
		$query = self::select('contact_queries.*')
						->orderBy('created_at', 'desc')
						->where('contact_queries.flag', 1);

		if ($category) {
			$query = $query->where('contact_queries', $category);
		}

		if ($no) {
			$query = $query->limit($no);
		}

		$result = $query->get();

		return $result;
	}



    public static function getbyId($id){
        $result= self::where('id',$id)
            ->where('flag',1)
            ->first();
        if (isset($result)) {
            return $result;
        }
        return '';
    }


    public static function destroybyid($id){
        $result= self::where('id',$id)
        ->update(['flag' => 0]);
        if (isset($result->id)) {
            return $result->id;
        }
        return '';
    }

}
