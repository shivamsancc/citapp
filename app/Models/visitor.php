<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    use HasFactory;
    protected $table = 'visitors';
    protected $fillable = ['ip', 'user_agent','method','path','cookie','response_code','response_after','created_at','updated_at'];
}
