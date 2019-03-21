@extends('layouts.app')


@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar medicamento') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('medicamento.create') }}">
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
                            <label for="codigobarras" class="col-md-4 col-form-label text-md-right">{{ __('Código de barras') }}</label>

                            <div class="col-md-6">
                                <input id="codigobarras" type="text" class="form-control{{ $errors->has('codigobarras') ? ' is-invalid' : '' }}" name="codigobarras" value="{{ old('codigobarras') }}" required autofocus>

                                @if ($errors->has('codigobarras'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('codigobarras') }}</strong>
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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