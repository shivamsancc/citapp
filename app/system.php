<?php namespace App;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Carbon\Carbon;
class system 
{
      public static  function getmasterdata(){
            $date = Carbon::parse('2008-08-16 11:00:00');
            $data['total_years'] = $date->diffInYears(Carbon::now());
            $data['settings'] = \App\Models\master_setting::getValues();
			return $data;
        }


      public static function fileuploader($location,$name,$file,$access_type){
            $filePath = 'upload/'.$location.'/'. $name;
            Storage::disk(env("FILESYSTEM_DRIVER"))->put($filePath, file_get_contents($file) , $access_type);
            $master_name=env("FILESYSTEM_DOMAIN").'/storage/'.$filePath;
            $media_saved=\App\Models\media_library::createmedia($name,$master_name,$file->getMimeType());
            if (isset($media_saved)) {
                  return $master_name;
            }
            return'';    
      }

      
      public static function random_strings($length_of_string) 
      { 
          $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
          return substr(str_shuffle($str_result),  0, $length_of_string); 
      }



}
