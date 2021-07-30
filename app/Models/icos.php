<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class icos extends Model
{
    protected $fillable=['title','description', 'photo' ,'content','video'];
    protected $primaryKey = 'id';
    protected $table = 'icos';
}
