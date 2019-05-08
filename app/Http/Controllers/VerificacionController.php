<?php

namespace App\Http\Controllers;

use App\Verificacion;
use Illuminate\Http\Request;
use App\Medicamento;

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
    public function create(Medicamento $medicamento)
    {
        $verificacion = $medicamento->verificacion;
        return view(
            'verificaciones.create',
            [
                'verificacion' => $verificacion,
                'medicamento'   =>  $medicamento
            ]
        );
        return view('verificaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Verificacion $verificacion)
    {
        $medicamento = $verificacion->medicamento;

        $lote = $medicamento->lote;

        $key = $medicamento->key();

        $token = $verificacion->token;
        $hash = $verificacion->hash;

        $dkey = encrypt($lote->__toString() . ($medicamento->number));

        if ($key === $dkey) {
            $dtoken = decrypt($key);
            if ($token === $dtoken) {
                $dhash = Hash::make($key);
                if ($hash === $dhash) {
                    return redirect()->route('verificacion.show', $verificacion);
                } else {
                    return redirect()->back();
                }
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
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
                'verificacion' => $verificacion,
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
