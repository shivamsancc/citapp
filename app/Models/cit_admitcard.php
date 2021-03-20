<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cit_admitcard extends Model
{
    use HasFactory;
    protected $table = 'cit_admitcards';
    protected $fillable = ['id','sn', 'name','fname','ename','session','duration','regno','rollno','course','semester',
    'scenter','ecenter','edate','rtime','notes','status','created_at','updated_at'];

}
