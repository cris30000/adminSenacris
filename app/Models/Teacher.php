<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function courseteacher(){
        return $this->hasMany(CourseTeacher::class);
}
    public function trainingscenter(){
    return $this->belongsTo(TrainingCenters::class);

}

}
