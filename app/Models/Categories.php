<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable=['title'];
    protected $primaryKey = 'id';
    protected $table = 'categories';

    
}
