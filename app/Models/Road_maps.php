<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Road_maps extends Model
{
    protected $fillable=['title', 'sortby' ,'date_start'];
    protected $primaryKey = 'id';
    protected $table = 'road_maps';
}
