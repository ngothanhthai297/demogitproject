<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TokenDistributions extends Model
{
    protected $fillable=['title','value'];
    protected $primaryKey = 'id';
    protected $table = 'token_distributions';
}
