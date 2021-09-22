@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/transportista" class="btn btn-outline-primary btn-sm">Volver</a>
                <h1 class="display-one">{{ ucfirst($transportista->codigo) }}</h1>
                <p>{!! $transportista->descripcion !!}</p> 
                <hr>
                <a href="/transportista/{{ $transportista->id }}/edit" class="btn btn-outline-primary">Editar Transportista</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Borrar Transportista</button>
                </form>
            </div>
        </div>
    </div>
@endsection