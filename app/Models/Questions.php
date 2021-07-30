<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable=['question_name', 'question_content','categories_id'];
    protected $primaryKey = 'id';
    protected $table = 'questions';
    public function getCategories()
    {
        return $this->hasMany('App\Models\Categories','id','categories_id');
    }
}
