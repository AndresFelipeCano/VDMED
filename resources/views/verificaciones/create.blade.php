@extends('layouts.app')


@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificar medicamento') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('verificacion.check', $verificacion) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="token" class="col-md-4 col-form-label text-md-right">{{ __('Código 1') }}</label>

                            <div class="col-md-6">
                                <input id="token" type="text" class="form-control{{ $errors->has('token') ? ' is-invalid' : '' }}" name="token" value="{{ old('token') }}" required autofocus>

                                @if ($errors->has('token'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('token') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hash" class="col-md-4 col-form-label text-md-right">{{ __('Código 2') }}</label>

                            <div class="col-md-6">
                                <input id="hash" type="text" class="form-control{{ $errors->has('hash') ? ' is-invalid' : '' }}" name="hash" value="{{ old('hash') }}" required autofocus>

                                @if ($errors->has('hash'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hash') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Verificar') }}
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
