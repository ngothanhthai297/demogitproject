<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member_Teams extends Model
{
    protected $fillable=['content', 'description','experces_id'];
    protected $primaryKey = 'id';
    protected $table = 'members';
}
