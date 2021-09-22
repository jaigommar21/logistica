@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Gesti&oacute;n de Transportistas</h1>
                        <p>Listado de Transportistas</p>
                    </div>
                    <div class="col-4">
                        <p>Crear Transportista</p>
                        <a href="/transportista/create/transportista" class="btn btn-primary btn-sm">Agregar</a>
                    </div>
                </div>                
                @forelse($transportistas as $transportista)
                    <ul>
                        <li><a href="/transportista/{{ $transportista->id }}">{{ ucfirst($transportista->codigo) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Transportistas disponibles</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection