<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitor_log extends Model
{
    use HasFactory;
    protected $table = 'visitor_logs';
    protected $fillable = ['ip', 'userAgent','method','path','cookie_id','parameters','response_code','response_after','created_at','updated_at'];
}
