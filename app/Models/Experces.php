<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experces extends Model
{
    protected $fillable=['experces_name', 'experces_percent'];
    protected $primaryKey = 'id';
    protected $table = 'experces';
}
