<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseTeacher extends Model
{
    //
    public function curse(){
        return $this->belongsTo(Curses::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);
}
}
