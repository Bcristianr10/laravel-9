<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index (){
        $curso = Curso::orderBy('id','desc')->paginate();
        return view('cursos.index',
        [
            'curso'=>$curso
        ]);

    }
    public function create (){
        return view('cursos.create');

    }
    public function store(StoreCurso $request){
        // manera tradicional de realizar los save en las base de datos
        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        // $curso->save();
        // no se coloca id porque laravel es totalmente inteligente para saber que necesita el id, solo se coloca $curso

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show',$curso);
    }
    public function show ($id){
        $curso = Curso::find($id);
        return view('cursos.show',['cursos'=>$curso]);
    }

    public function edit(Curso $curso){
        return view('cursos.edit',[
            'curso'=>$curso
        ]);
    }

    public function update(Request $request, Curso $curso){


        $curso->name = $request->name;
        $curso->description = $request->name;
        $curso->category = $request->name;
        $curso->save();
        return redirect()->route('cursos.show',$curso);
    }

    
}
