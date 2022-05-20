<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
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
    public function store(StoreCurso $request)
    {
        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        $curso = Curso::create($request->all());

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
        $request->validate([
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ]);
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
