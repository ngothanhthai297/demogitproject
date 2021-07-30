<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Token_sale extends Model
{
    protected $fillable=['content', 'description','name','symbol','blockchain','standard','standard','type','total','percent','exchange'];
    protected $primaryKey = 'id';
    protected $table = 'token_sales';
}
