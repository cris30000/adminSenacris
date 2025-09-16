<?php

namespace App\Http\Controllers;

use App\Models\CourseTeacher;
use Illuminate\Http\Request;

class CourseTeacherontroller extends Controller
{
    //

    public function index(){
        return "Listado de cursos y profesores";
    }
    public function show($name){
        return "Mostrando  cursos y profesores: ".$name;
    }
    public function create(){
        return view('frm_courseteacher');
    }
    public function store(Request $request){
        $course_id=$request->course_id;
        $teacher_id=$request->teacher_id;
        

        $resul = new CourseTeacher();
        $resul->course_id=$request->course_id;
        $resul->teacher_id=$request->teacher_id;
        

        $resul->save();
        return $resul;
    }

}
