<?php

namespace App\Http\Controllers;

use App\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Verificacion;

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

        $lote = $request->input('lote');
        $fuente = $request->input('fuente');
        $barcode = $request->input('barcode');
        $nombre = $request->input('nombre');
        $invima = $request->input('invima');
        $expires = $request->input('expires');
        $import_data = $request->input('import_data');
        $sanitary = $request->input('sanitary');

        $text
            = $lote.
            $fuente.
            $barcode.
            $nombre.
            $invima.
            $expires.
            $import_data.
            $sanitary;

        $hash = Hash::make($text);

        $medicamento = new Medicamento();
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
        $verification = new Verificacion();
        $verification->token = $token;
        $verification->hash = $hash;
        $verification->medicamento()->associate($medicamento);
        $verification->save();



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
