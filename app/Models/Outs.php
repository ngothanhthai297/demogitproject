<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outs extends Model
{
    protected $fillable=['our_name', 'our_description'];
    protected $primaryKey = 'id';
    protected $table = 'outs';
}
