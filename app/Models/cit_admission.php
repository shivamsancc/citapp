<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cit_admission extends Model
{
    use HasFactory;
    protected $table = 'cit_admissions';
    protected $fillable = ['id','sname', 'fname', 'course','studycenter','regno','doa','coc','session','Duration','Batch time-','status','created_at','updated_at'];
}
