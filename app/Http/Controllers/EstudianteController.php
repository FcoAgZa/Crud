<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Grupo;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['estudiantes']=Estudiante::paginate(50);
        return view ('estudiantes.index',$datos);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('estudiantes.create');
        $grupos=Grupo::select('select * from grupos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos_estudiante=request()->except('_token');  
        Estudiante::insert($datos_estudiante);
        return redirect('estudiantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id_estudiante)
    {
        $estudiante=Estudiante::findOrFail($id_estudiante);
        return view ('estudiantes.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_estudiante)
    {
        $datos_estudiante=request()->except(['_token','_method']);
        Estudiante::where('id_estudiante','=',$id_estudiante)->update($datos_estudiante);

        $estudiante=Estudiante::findOrFail($id_estudiante);
        return redirect('estudiantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_estudiante)
    {
        //
        Estudiante::destroy($id_estudiante);
        return redirect('estudiantes');
    }
}
