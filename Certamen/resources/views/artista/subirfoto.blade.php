@extends('layouts.master')

@section('contenido-principal')

<!-- form agregar jugador -->
<div class="col-12 col-lg-4 order-first order-lg-last">
    <div class="card">
        <div class="card-header bg-dark text-white">Agregar Foto</div>
        <div class="card-body">
            <form method="POST" action="{{-- {{route('jugadores.store')}} --}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" id="titulo" name="titulo" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="imagen">Imagen:</label>
                    <input type="file" id="imagen" name="imagen" class="form-control-file">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" id="Comentario" style="height: 100px"></textarea>
                    <label for="Comentario">Comentario</label>
                </div>
                <div>

                </div>              
                <div class="mb-3 d-grid gap-2 d-lg-block">
                    <button type="reset" class="btn btn-warning">Cancelar</button>
                    <button type="submit" class="btn btn-success">Agregar Imagen</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection