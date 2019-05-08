<?php

namespace App\Http\Controllers;

use App\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Verificacion;
use App\Lote;
use App\User;
use Illuminate\Support\Facades\Auth;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamentos = Medicamento::all();
        return view(
            'medicamentos.index', [
                'medicamentos' => $medicamentos
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
        return view('medicamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = (Auth::check()) ? Auth::user() : User::find(1);

        $lote = new Lote();

        $lote->nombre = $request->input('nombre');
        $lote->importador = $request->input('importador');
        $lote->distribuidor = $request->input('distribuidor');
        $lote->numero = $request->input('numero');
        $lote->fecha_vencimiento = $request->input('fecha_vencimiento');
        $lote->invima = $request->input('invima');
        $lote->save();

        $stringKey
            = $lote->id .
            $lote->nombre .
            $lote->importador .
            $lote->distribuidor .
            $lote->numero .
            $lote->fecha_vencimiento .
            $lote->invima .
            $lote->created_at;

        $cantidad = (int)$request->cantidad;
        for ($i = 0; $i < $cantidad; $i++) {
            $medicamento = new Medicamento();
            $medicamento->numero = $i + 1;
            $medicamento->lote()->associate($lote);

            $key = encrypt($stringKey);
            $token = encrypt($key);
            $hash = Hash::make($key);

            $medicamento->key = $key;
            $medicamento->save();

            $verificacion = new Verificacion();
            $verificacion->token = $token;
            $verificacion->hash = $hash;

            $verificacion->user()->associate($user);
            $verificacion->medicamento()->associate($medicamento);
            $verificacion->save();
        }
        return redirect()->route('medicamento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function show(Medicamento $medicamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicamento $medicamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicamento $medicamento)
    {
        $lote = $request->input('lote');
        $fuente = $request->input('fuente');
        $barcode = $request->input('barcode');
        $nombre = $request->input('nombre');
        $invima = $request->input('invima');
        $expires = $request->input('expires');
        $import_data = $request->input('import_data');
        $sanitary = $request->input('sanitary');

        $text
            = $lote .
            $fuente .
            $barcode .
            $nombre .
            $invima .
            $expires .
            $import_data .
            $sanitary;

        $hash = Hash::make($text);

        $medicamento->lote = $lote;
        $medicamento->fuente = $fuente;
        $medicamento->barcode = $barcode;
        $medicamento->nombre = $nombre;
        $medicamento->invima = $invima;
        $medicamento->expires = $expires;
        $medicamento->import_data = $import_data;
        $medicamento->sanitary = $sanitary;
        $medicamento->save();
        $token = encrypt($medicamento->id);
        $verification = $medicamento->verificacion;
        $verification->token = $token;
        $verification->hash = $hash;
        $verification->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicamento $medicamento)
    {
        $medicamento->verificacion()->first()->delete();
        $medicamento->delete();

        return redirect()->route('medicamento.index');
    }
}
