<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apps extends Model
{
    protected $fillable=['content','description' ,'live','news','exchange','photo'];
    protected $primaryKey = 'id';
    protected $table = 'apps';
}
