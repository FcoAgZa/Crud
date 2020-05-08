<?php

namespace App\Http\Controllers;

use App\Estudiante;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function SelectGrupo()
    {

        return view ('estudiantes.create', compact('grupo'));
        //return view('estudiantes.create', ['users' => $grupo]);
    }
}