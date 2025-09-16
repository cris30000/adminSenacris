<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprentices extends Model
{
    //
     public function curse(){
        return $this->belongsTo(Curses::class);
}
    public function computer(){
        return $this->belongsTo(Computers::class);

    }
   
}
