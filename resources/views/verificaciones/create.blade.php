@extends('layouts.app')


@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificar medicamento') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('verificacion.create') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="code1" class="col-md-4 col-form-label text-md-right">{{ __('Código 1') }}</label>

                            <div class="col-md-6">
                                <input id="code1" type="text" class="form-control{{ $errors->has('code1') ? ' is-invalid' : '' }}" name="code1" value="{{ old('code1') }}" required autofocus>

                                @if ($errors->has('code1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('code1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="code2" class="col-md-4 col-form-label text-md-right">{{ __('Código 2') }}</label>

                            <div class="col-md-6">
                                <input id="code2" type="text" class="form-control{{ $errors->has('code2') ? ' is-invalid' : '' }}" name="code2" value="{{ old('code2') }}" required autofocus>

                                @if ($errors->has('code2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('code2') }}</strong>
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