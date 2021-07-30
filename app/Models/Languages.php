<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    protected $fillable=['name', 'short_name'];
    protected $primaryKey = 'id';
    protected $table = 'languages';
}
