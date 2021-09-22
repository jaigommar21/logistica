@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/transportista" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Crear Nuevo Transportista</h1>
                    <p>Fill and submit this form to create a post</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="codigo">Codigo</label>
                                <input type="text" id="codigo" class="form-control" name="codigo"
                                       placeholder="Ingresar codigo" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="descripcion">Descripcion</label>
                                <textarea id="descripcion" class="form-control" name="descripcion" placeholder="Ingresar descripcion"
                                          rows="" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Crear Transportista
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection