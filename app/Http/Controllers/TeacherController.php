<?php

namespace App\Http\Controllers;
use App\Models\Teacher;


use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // funcion para teacher
        //funcion para profiles
    public function index(){
        return "Listado de profesores";
    }
    public function show($name){
        return "Mostrando profesores: ".$name;
    }
    public function create(){
        return view('frm_teacher');
    }
    public function store(Request $request){
        $name=$request->name;
        $email=$request->email;
        

        $resul = new Teacher();
        $resul->name=$request->name;
        $resul->email=$request->email;
        

        $resul->save();
        return $resul;
    }


}
