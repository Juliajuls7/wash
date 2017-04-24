<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function type() {
        return $this->belongsTo('\App\Type');
    }
    
    public function user() {
        return $this->belongsTo('\App\User');
    }
    
    public function executor() {
        return $this->belongsTo('\App\User','executor_id','id');
    }
    
}
