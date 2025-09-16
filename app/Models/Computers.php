<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    //
    public function apprentice(){
        return $this->belongsTo(Apprentices::class);;
    }
}
