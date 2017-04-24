<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function works() {
        return $this->hasMany('\App\Work');
    }
    
    public function user() {
        return $this->belongsTo('\App\User');    
    }
}
