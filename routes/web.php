<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCentersController;
use App\Http\Controllers\CursesController;
use App\Http\Controllers\ApprenticesController;
use App\Http\Controllers\ComputersController;   
use App\Http\Controllers\CourseTeacherontroller;
use App\Http\Controllers\OrmController;





Route::get('/', function () {
    return view('welcome');
});

route::get('consultaOrm',[OrmController::class,'consulta']);

Route::get('teachers',[TeacherController::class,'index'])->name('teacher.index');
Route::get('teacher/create',[TeacherController::class,'create'])->name('teacher.create');
Route::post ('teacher/store',[TeacherController::class,'store'])->name('teacher.store');
Route::get('teacher/{teacher}',[TeacherController::class,'show'])->name('teacher.show');
Route::put('teacher/{teacher}',[TeacherController::class,'update'])->name('teacher.update');
Route::delete('teacher/{teacher}',[TeacherController::class,'destroy'])->name('teacher.destroy');
Route::get('teacher/{teacher}/edit',[TeacherController::class,'edit'])->name('teacher.edit');

Route::get('areas',[AreaController::class,'index'])->name('areas.index');
Route::get('area/create',[AreaController::class,'create'])->name('areas.create');
Route::post ('area/store',[AreaController::class,'store'])->name('areas.store');
Route::get('area/{area}',[AreaController::class,'show'])->name('areas.show');
Route::put('area/{area}',[AreaController::class,'update'])->name('areas.update');
Route::delete('area/{area}',[AreaController::class,'destroy'])->name('area.destroy');
Route::get('area/{area}/edit',[AreaController::class,'edit'])->name('area.edit');

// creo ruta para training 
Route::get('trainings',[TrainingCentersController::class,'index'])->name('training.index');
Route::get('training/create',[TrainingCentersController::class,'create'])->name('training.create');
Route::post ('training/store',[TrainingCentersController::class,'store'])->name('training.store');
Route::get('training/{training}',[TrainingCentersController::class,'show'])->name('training.show');
Route::put('training/{training}',[TrainingCentersController::class,'update'])->name('training.update');
Route::delete('training/{training}',[TrainingCentersController::class,'destroy'])->name('training.destroy');
Route::get('training/{training}/edit',[TrainingCentersController::class,'edit'])->name('training.edit');

// CREO ruta para  curso_teacher
Route::get('curses',[CursesController::class,'index'])->name('training.index');
Route::get('curse/create',[CursesController::class,'create'])->name('curse.create');
Route::post ('curse/store',[CursesController::class,'store'])->name('curse.store');
Route::get('curse/{curse}',[CursesController::class,'show'])->name('curse.show');
Route::put('curse/{curse}',[CursesController::class,'update'])->name('curse.update');
Route::delete('curse/{curse}',[CursesController::class,'destroy'])->name('curse.destroy');
Route::get('curse/{curse}/edit',[CursesController::class,'edit'])->name('curse.edit');


// ruta para aprendices

Route::get('apprentices',[ApprenticesController::class,'index'])->name('apprentice.index');
Route::get('apprentice/create',[ApprenticesController::class,'create'])->name('apprentice.create');
Route::post ('apprentice/store',[ApprenticesController::class,'store'])->name('apprentice.store');
Route::get('apprentice/{apprentice}',[ApprenticesController::class,'show'])->name('apprentice.show');
Route::put('apprentice/{apprentice}',[ApprenticesController::class,'update'])->name('apprentice.update');
Route::delete('apprentice/{apprentice}',[ApprenticesController::class,'destroy'])->name('apprentice.destroy');
Route::get('apprentice/{apprentice}/edit',[ApprenticesController::class,'edit'])->name('apprentice.edit');



// ruta para computadores

Route::get('computers',[ComputersController::class,'index'])->name('computer.index');
Route::get('computer/create',[ComputersController::class,'create'])->name('computer.create');
Route::post ('computer/store',[ComputersController::class,'store'])->name('computer.store');
Route::get('computer/{computer}',[ComputersController::class,'show'])->name('computer.show');
Route::put('computer/{computer}',[ComputersController::class,'update'])->name('computer.update');
Route::delete('computer/{computer}',[ComputersController::class,'destroy'])->name('computer.destroy');
Route::get('computer/{computer}/edit',[ComputersController::class,'edit'])->name('computer.edit');

//ruta para crear 
Route::get('courseTeacher',[CourseTeacherontroller::class,'index'])->name('courseTeacher.index');
Route::get('courseTeacher/create',[CourseTeacherontroller::class,'create'])->name('courseTeacher.create');
Route::post ('courseTeacher/store',[CourseTeacherontroller::class,'store'])->name('courseTeacher.store');
Route::get('courseTeacher/{courseTeacher}',[CourseTeacherontroller::class,'show'])->name('courseTeacher.show');
Route::put('courseTeacher/{courseTeacher}',[CourseTeacherontroller::class,'update'])->name('courseTeacher.update');
Route::delete('courseTeacher/{courseTeacher}',[CourseTeacherontroller::class,'destroy'])->name('courseTeacher.destroy');
Route::get('courseTeacher/{courseTeacher}/edit',[CourseTeacherontroller::class,'edit'])->name('courseTeacher.edit');