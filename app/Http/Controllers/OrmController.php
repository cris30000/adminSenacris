<?php

namespace App\Http\Controllers;
use App\Models\Teacher;

use Illuminate\Http\Request;

class OrmController extends Controller
{
    //
    public function consulta(){
       // $teacher=Teacher::find(1);
        //$teacher=Teacher::find($teacher->id);
       // return($teacher);
// con este metodo traigo todos los registros
$teacher = Teacher::all();
return ($teacher);
// para traer el area del teacher
$teacher = Teacher::find(1);
return $teacher->areas;

        //return $teacher->area;
    }
}

