<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::get();

        return view('Cursos.cursoIndex', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cursos.cursoSettings');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'nombre' => 'required | string | min:5',
            'fechaPublicacion' => 'required | date',
            'costo' => 'required | numeric',
            'descripcion' => 'string | nullable',
            'idioma' => 'required | string | min:4',
            'aprendizajes' => 'string | nullable',
            'requisitos' => 'string | nullable'
        ]);

        Curso::create( $request->all() );

        return redirect()->route('curso.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        return view('Cursos.cursoShow', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        return view('Cursos.cursoSettings', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'nombre' => 'required | string | min:5',
            'fechaPublicacion' => 'required | date',
            'costo' => 'required | numeric',
            'descripcion' => 'string | nullable',
            'idioma' => 'required | string | min:4',
            'aprendizajes' => 'string | nullable',
            'requisitos' => 'string | nullable'
        ]);

        Curso::where('id', $curso->id)->update($request->except('_method', '_token'));

        return redirect()->route('curso.show', [$curso]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('curso.index');
    }
}
