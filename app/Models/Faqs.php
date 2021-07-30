<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    protected $fillable=['title', 'description'];
    protected $primaryKey = 'id';
    protected $table = 'faqs';
}
