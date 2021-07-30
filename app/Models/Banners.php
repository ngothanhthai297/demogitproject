<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    protected $fillable=['title', 'content','photo','status'];
    protected $primaryKey = 'id';
    protected $table = 'banners';
}
