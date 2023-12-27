@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido!') }}

                    Proyecto FullStack

                </div>
                <a href="{{ route('estudiante.index') }}">
                    <div class="card" style="width: 11rem;" >
                        <img src="imagenes/estudiante.png" width="100" height="100" class="mx-auto">
                        <div class="card-body">
                            <p class="card-text">ADMIN ESTUDIANTE</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
