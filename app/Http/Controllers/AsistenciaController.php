<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Asistencia;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Asistencia::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Asistencia::create($request->all());
    }

    /**
     *
     */
    public function getCountRegistrosAsistenciaHoy($coder_id)
    {
        try {
            return User::findOrFail($coder_id)->countRegistrosAsistenciaHoy();
        } catch (ModelNotFoundException $e) {
            return response(['Error' => 'Coder no existe'], 404);
        }
    }
}
