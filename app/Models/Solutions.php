<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solutions extends Model
{
    protected $fillable=['title', 'description'];
    protected $primaryKey = 'id';
    protected $table = 'solutions';
}
