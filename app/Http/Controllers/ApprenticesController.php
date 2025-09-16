<?php

namespace App\Http\Controllers;

use App\Models\Apprentices;
use Illuminate\Http\Request;

class ApprenticesController extends Controller
{
    //
      public function index(){
        return "Listado de aprendices";
    }
    public function show($name){
        return "Mostrando aprendices: ".$name;
    }
    public function create(){
        return view('frm_apprentices');
    }
    public function store(Request $request){
        $name=$request->name;
        $email=$request->email;
        $cell_number=$request->cell_number; 
        $course_id=$request->course_id;
        $computer_id=$request->computer_id;
        

        $resul = new Apprentices();
        $resul->name=$request->name;
        $resul->email=$request->email;
        $resul->cell_number=$cell_number;
        $resul->course_id=$course_id;
        $resul->computer_id=$computer_id;
        

        $resul->save();
        return $resul;
    }

}
