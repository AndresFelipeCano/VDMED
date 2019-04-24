@extends('layouts.app')


@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar medicamento') }}</div>

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
                            <label for="lote" class="col-md-4 col-form-label text-md-right">{{ __('Lote') }}</label>

                            <div class="col-md-6">
                                <input id="lote" type="text" class="form-control{{ $errors->has('lote') ? ' is-invalid' : '' }}" name="lote" value="{{ old('lote') }}" required autofocus>

                                @if ($errors->has('lote'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lote') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fuente" class="col-md-4 col-form-label text-md-right">{{ __('Fuente') }}</label>

                            <div class="col-md-6">
                                <input id="fuente" type="text" class="form-control{{ $errors->has('fuente') ? ' is-invalid' : '' }}" name="fuente" value="{{ old('fuente') }}" required autofocus>

                                @if ($errors->has('fuente'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fuente') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="barcode" class="col-md-4 col-form-label text-md-right">{{ __('Código de barras') }}</label>

                            <div class="col-md-6">
                                <input id="barcode" type="text" class="form-control{{ $errors->has('barcode') ? ' is-invalid' : '' }}" name="barcode" value="{{ old('barcode') }}" required autofocus>

                                @if ($errors->has('barcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('barcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="invima" class="col-md-4 col-form-label text-md-right">{{ __('Registro INVIMA') }}</label>

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
                            <label for="expires" class="col-md-4 col-form-label text-md-right">{{ __('Registro de expiración') }}</label>

                            <div class="col-md-6">
                                <input id="expires" type="text" class="form-control{{ $errors->has('expires') ? ' is-invalid' : '' }}" name="expires" value="{{ old('expires') }}" required autofocus>

                                @if ($errors->has('expires'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('expires') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="import_data" class="col-md-4 col-form-label text-md-right">{{ __('Datos de importación') }}</label>

                            <div class="col-md-6">
                                <input id="import_data" type="text" class="form-control{{ $errors->has('import_data') ? ' is-invalid' : '' }}" name="import_data" value="{{ old('import_data') }}" required autofocus>

                                @if ($errors->has('import_data'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('import_data') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sanitary" class="col-md-4 col-form-label text-md-right">{{ __('Registro sanitario') }}</label>

                            <div class="col-md-6">
                                <input id="sanitary" type="text" class="form-control{{ $errors->has('sanitary') ? ' is-invalid' : '' }}" name="sanitary" value="{{ old('sanitary') }}" required autofocus>

                                @if ($errors->has('sanitary'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sanitary') }}</strong>
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
