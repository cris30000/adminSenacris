<?php

namespace App\Http\Controllers;
use App\Models\Computers;

use Illuminate\Http\Request;

class ComputersController extends Controller
{
    //
     public function index(){
        return "Listado de computadores";
    }
    public function show($name){
        return "Mostrando computadores: ".$name;
    }
    public function create(){
        return view('frm_computers');
    }
    public function store(Request $request){
        $name=$request->name;
        $brand=$request->brand;
        

        $resul = new Computers();
        $resul->name=$request->name;
        $resul->brand=$request->brand;
        

        $resul->save();
        return $resul;
    }


}
