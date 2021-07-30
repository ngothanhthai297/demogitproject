<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Whitepapers extends Model
{
    protected $fillable=['title', 'upload_file','description'];
    protected $primaryKey = 'id';
    protected $table = 'whitepapers';
}
