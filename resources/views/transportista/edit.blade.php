@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/transportista" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Editar Transportista</h1>
                    <p>Edit and submit this form to update a post</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="codigo">Codigo</label>
                                <input type="text" id="codigo" class="form-control" name="codigo"
                                       placeholder="Enter Post Title" value="{{ $transportista->codigo }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="descripcion">Descripcion</label>
                                <textarea id="descripcion" class="form-control" name="descripcion" placeholder="Enter Post Body"
                                          rows="5" required>{{ $transportista->descripcion }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection