<?php

namespace App\Http\Controllers;
use App\Models\Curses;

use Illuminate\Http\Request;

class CursesController extends Controller
{
    //
    public function index(){
        return "Listado de cursos";
    }
    public function show($name){
        return "Mostrando cursos: ".$name;
    }
    public function create(){
        return view('frm_curse');
    }
    public function store(Request $request){
        $name=$request->name;
        $curser_number=$request->curser_number;
        $day=$request->day;
        $area_id=$request->area_id; 
        $training_centers_id=$request->training_centers_id;
        

        $resul = new Curses();
        $resul->name=$request->name;
        $resul->curser_number=$request->curser_number;
        $resul->day=$day;
        $resul->area_id=$area_id;
        $resul->training_centers_id=$training_centers_id;
        

        $resul->save();
        return $resul;
    }

}
