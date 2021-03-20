<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cit_result extends Model
{
    use HasFactory;
    protected $table = 'cit_results';
    protected $fillable = ['id','exam','roll','name','fname','course',
    'regno','session','duration','examdate','studycentre','theorytotal','tmasgg','pmt','pmagg',
    'ptmagg','ovp','exam_status','grade','coursedetails','status','created_at','updated_at'];

}
