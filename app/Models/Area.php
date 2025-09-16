<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    public function curses(){
// puedo realizarlo de las dos formas llamando a la clase o llamando al modelo
        //return $this->hasMany(Curses::class);
        return $this->hasMany(Curses::class);
        
    }
    public function teachers(){
        return $this->hasMany(Teacher::class);

}
}