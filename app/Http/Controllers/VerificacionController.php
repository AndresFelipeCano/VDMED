<?php

namespace App\Http\Controllers;

use App\Verificacion;
use Illuminate\Http\Request;

class VerificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verificaciones = Verificacion::all();

        return view(
            'verificaciones.index', [
                'verificaciones' => $verificaciones
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('verificaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Verificacion  $verificacion
     * @return \Illuminate\Http\Response
     */
    public function show(Verificacion $verificacion)
    {
        return view(
            'verificaciones.show', [
                'verificacion' => $verificacion
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Verificacion  $verificacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Verificacion $verificacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Verificacion  $verificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Verificacion $verificacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Verificacion  $verificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Verificacion $verificacion)
    {
        //
    }
}
