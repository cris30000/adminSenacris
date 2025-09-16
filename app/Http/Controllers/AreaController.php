<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    //

        // funcion para teacher
        //funcion para profiles
    public function index(){
        return "Listado de areas";
    }
    public function show($name){
        return "Mostrando areas: ".$name;
    }
    public function create(){
        return view('frm_areas');
    }
    public function store(Request $request){
        $name=$request->name;
        
        $resul = new Area();
        $resul->name=$request->name;
        
        

        $resul->save();
        return $resul;
    }

}
