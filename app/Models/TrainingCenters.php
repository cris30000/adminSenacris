<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCenters extends Model
{
    //

    public function teachers(){
        return $this->hasmany('App\Models\teachers');
     
}
    public function curses(){
        return $this->hasmany('App\Models\curses');
}
}
