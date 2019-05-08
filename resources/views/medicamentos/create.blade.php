@extends('layouts.app')


@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar lote de medicamentos') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('medicamento.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="importador" class="col-md-4 col-form-label text-md-right">{{ __('Importador') }}</label>

                            <div class="col-md-6">
                                <input id="importador" type="text" class="form-control{{ $errors->has('importador') ? ' is-invalid' : '' }}" name="importador" value="{{ old('importador') }}" required autofocus>

                                @if ($errors->has('importador'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('importador') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="distribuidor" class="col-md-4 col-form-label text-md-right">{{ __('Distribuidor') }}</label>

                            <div class="col-md-6">
                                <input id="distribuidor" type="text" class="form-control{{ $errors->has('distribuidor') ? ' is-invalid' : '' }}" name="distribuidor" value="{{ old('distribuidor') }}" required autofocus>

                                @if ($errors->has('distribuidor'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('distribuidor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('Número') }}</label>

                            <div class="col-md-6">
                                <input id="numero" type="text" class="form-control{{ $errors->has('numero') ? ' is-invalid' : '' }}" name="numero" value="{{ old('numero') }}" required autofocus>

                                @if ($errors->has('numero'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_vencimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de vencimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_vencimiento" type="text" class="form-control{{ $errors->has('fecha_vencimiento') ? ' is-invalid' : '' }}" name="fecha_vencimiento" value="{{ old('fecha_vencimiento') }}" required autofocus>

                                @if ($errors->has('fecha_vencimiento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fecha_vencimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="invima" class="col-md-4 col-form-label text-md-right">{{ __('Registro invima') }}</label>

                            <div class="col-md-6">
                                <input id="invima" type="text" class="form-control{{ $errors->has('invima') ? ' is-invalid' : '' }}" name="invima" value="{{ old('invima') }}" required autofocus>

                                @if ($errors->has('invima'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('invima') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cantidad" class="col-md-4 col-form-label text-md-right">{{ __('Cantidad') }}</label>

                            <div class="col-md-6">
                                <input id="cantidad" type="number" class="form-control{{ $errors->has('cantidad') ? ' is-invalid' : '' }}" name="cantidad" value="{{ old('cantidad') }}" required autofocus>

                                @if ($errors->has('cantidad'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cantidad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
