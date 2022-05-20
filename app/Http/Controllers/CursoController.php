<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CursoController extends Controller
{
    //
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }
    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }

    public function create()
    {
        return view('cursos.create');
    }
    public function show(Curso $curso)
    {
        // $curso =  Curso::find($id);
        return  view('cursos.show', compact('curso'));
        //compact(curso) = ['cursos' => $cursos]
    }

    public function edit(Curso $curso)
    {
        // return $curso;
        return  view('cursos.edit', compact('curso'));
    }
    public function update(Request $request, Curso $curso)
    {
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }
}
