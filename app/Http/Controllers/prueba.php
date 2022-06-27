<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class prueba extends Controller
{
    public function edit(){
        return view('cursos.2edit');
    }
    public function show(){
        return view('cursos.3edit');
    }
    public function update(Request $request){
        $obj__curso = Curso::find(1);
        $obj__curso->name = $request->name;
        $obj__curso->save();
        return'weww';
    }
}
