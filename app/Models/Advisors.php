<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advisors extends Model
{
    protected $fillable=['tilte', 'name','position','photo', 'desciption' ,'linkedin','status'];
    protected $primaryKey = 'id';
    protected $table = 'advisors';
}
