<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon  extends Model
{
     protected $table = 'pokemon';
     protected $fillable = [
        'id','name','url',  
    ];
}