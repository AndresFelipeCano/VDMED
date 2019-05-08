@extends('layouts.app')

@section('title', 'Medicamentos')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mx-auto">
                @include('layouts.errors')
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre / Lote</th>
                            <th scope="col">Importador / Lote</th>
                            <th scope="col">Distribuidor / Lote</th>
                            <th scope="col">Número / Lote</th>
                            <th scope="col">Fecha vencimiento / Lote</th>
                            <th scope="col">Registro Invima / Lote</th>
                            <th scope="col">Número / Medicamento</th>
                            <th scope="col"><a href="{{route('medicamento.create')}}"><button class="btn btn-primary">Crear</button></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($medicamentos as $medicamento)
                            <tr class="medicamento-selectable">
                                <th scope="row">{{$medicamento->id}}</th>
                                <form action="{{route('medicamento.update', $medicamento)}}" method="post">
                                    @csrf
                                    @method('put')
                                    <td>
                                        <input type="text" name="lote" value="{{$medicamento->lote->nombre}}" class="form-control" autocomplete="off">
                                        <button type="submit" class="btn btn-success btn-small mt-2">Guardar</button>
                                        <a href="{{route('verificacion.create', $medicamento)}}"><button type="submit" class="btn btn-link btn-small mt-2">Verificar</button></a>
                                    </td>
                                    <td>
                                        <input type="text" name="fuente" value="{{$medicamento->lote->importador}}" class="form-control" autocomplete="off">
                                    </td>
                                    <td>
                                        <input type="text" name="barcode" value="{{$medicamento->lote->distribuidor}}" class="form-control" autocomplete="off">
                                    </td>
                                    <td>
                                        <input type="text" name="nombre" value="{{$medicamento->lote->numero}}" class="form-control" autocomplete="off">
                                    </td>
                                    <td>
                                        <input type="text" name="invima" value="{{$medicamento->lote->fecha_vencimiento}}" class="form-control" autocomplete="off">
                                    </td>
                                    <td>
                                        <input type="text" name="expires" value="{{$medicamento->lote->invima}}" class="form-control" autocomplete="off">
                                    </td>
                                    <td>
                                        <input type="text" name="import_data" value="{{$medicamento->numero}}" class="form-control" autocomplete="off">
                                    </td>
                                </form>
                                <td>{{$medicamento->created_at}}</td>
                                <td>
                                    <form action="{{ route('medicamento.destroy', $medicamento)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-small">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th scope=row>N/N</th>
                                <td coslpan="4">Sin datos registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
