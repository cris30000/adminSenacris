<?php

namespace App\Http\Controllers;
use App\Models\Teacher;

use Illuminate\Http\Request;

class OrmController extends Controller
{
    //
    public function consulta(){
        $teacher=Teacher::find(1);

        return $teacher->curse;
    }
}
