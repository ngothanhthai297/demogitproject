<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $fillable = ['title', 'name', 'position', 'photo', 'linkedin', 'facebook', 'instagram', 'twitter'];
    protected $primaryKey = 'id';
    protected $table = 'teams';
}
