<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cit_certificate extends Model
{
    use HasFactory;
    protected $table = 'cit_certificates';
    protected $fillable = ['id','sl_no','cert_no','name','fname','certificate','iname','reg_no','grade','gradeper','period_from','period_to','roll1','roll2','theory_1','practical_1','total_1','theory_2','practical_2','total_2','grandtotal','course_1','course_2','doi','status','created_at','updated_at'];
}
