<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    protected $fillable=['title'];
    protected $primaryKey = 'id';
    protected $table = 'distributions';
}
