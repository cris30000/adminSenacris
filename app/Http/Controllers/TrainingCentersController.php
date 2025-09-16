<?php

namespace App\Http\Controllers;
use App\Models\TrainingCenters;


use Illuminate\Http\Request;

class TrainingCentersController extends Controller
{
    //
    public function index(){
        return "Listado de centros de formacion";
    }
    public function show($name){
        return "Mostrando centros de formacion: ".$name;
    }
    public function create(){
        return view('frm_trainingcenters');
    }
    public function store(Request $request){
        $name=$request->name;
        $location=$request->location;
        

        $resul = new TrainingCenters();
        $resul->name=$request->name;
        $resul->location=$request->location;
        

        $resul->save();
        return $resul;
    }
}
