@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>Gesti&oacute;n de Transportistas</p>
                <br>
                <a href="/transportista" class="btn btn-outline-primary">Mostrar</a>
            </div>
        </div>
    </div>
@endsection