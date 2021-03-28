@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ruta') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ruta') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror">

                                                       <div class="form-group row">
                            <label for="lat_ini" class="col-md-4 col-form-label text-md-right">{{ __('lat_ini') }}</label>

                            <div class="col-md-6">
                                <input id="lat_ini" type="text" class="form-control @error('lat_ini') is-invalid @enderror">
                              
                            </div>
                        </div>
                                                       <div class="form-group row">
                            <label for="long_ini" class="col-md-4 col-form-label text-md-right">{{ __('long_ini') }}</label>

                            <div class="col-md-6">
                                <input id="long_ini" type="text" class="form-control @error('long_ini') is-invalid @enderror">
                              
                            </div>
                        </div>

                                                    <div class="form-group row">
                            <label for="lat_fin" class="col-md-4 col-form-label text-md-right">{{ __('lat_fin') }}</label>

                            <div class="col-md-6">
                                <input id="lat_fin" type="text" class="form-control @error('lat_ini') is-invalid @enderror">
                              
                            </div>
                        </div>
                                         <div class="form-group row">
                            <label for="long_fin" class="col-md-4 col-form-label text-md-right">{{ __('long_fin') }}</label>

                            <div class="col-md-6">
                                <input id="long_fin" type="text" class="form-control @error('long_ini') is-invalid @enderror">
                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
