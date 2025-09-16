<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curses extends Model
{
    //
    public function area(){
       
        return $this->belongsTo(Area::class);

    }
    public function trainingCenter(){
        return $this->belongsTo(TrainingCenters::class);
    
}
public function apprendices(){
    return $this->hasmany(Apprentices::class);

}
   public function ourseteacher(){
    return $this->hasmany(CourseTeacher::class);
}
}
