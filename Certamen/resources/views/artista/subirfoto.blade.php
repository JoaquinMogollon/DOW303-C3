@extends('layouts.master')

@section('contenido-principal')

<!-- form agregar jugador -->
<div class="col-12 col-lg-4 order-first order-lg-last">
    <div class="card">
        <div class="card-header bg-dark text-white">Agregar Foto</div>
        <div class="card-body">
            <form method="POST" action="{{route('imagenes.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" id="titulo" name="titulo" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="archivo">Imagen:</label>
                    <input type="file" id="archivo" name="archivo" class="form-control-file">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" id="Comentario" style="height: 100px"></textarea>
                    <label for="Comentario">Comentario</label>
                </div>
                <div class="mb-3">
                    <label for="cuenta_user" class="form-label">Cuenta</label>
                    <input type="text" id="cuenta_user" name="cuenta_user" class="form-control">
                </div>
      {{--           <div class="mb-3">
                    <label for="baneado" class="from-label">Baneado: </label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="pos-bansi" name="baneado" value="true" checked>
                            <label class="form-check-label" for="pos-bansi">Si</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="pos-banno" name="baneado" value="false" checked>
                            <label class="form-check-label" for="pos-banno">No</label>
                        </div>
                    </div>
                </div> --}}
                <div class="mb-3">
                    <textarea name="motivo_ban" id="motivo_ban"></textarea>
                    <label for="motivo_ban"></label>
                </div>
                {{-- <div class="form-group">
                    <label for="usuario">Usuario:</label>
                        <select class="form-control" name="usuario" id="usuario">
                            @foreach ($usuarios as $usuario)
                                <option value="{{$usuario->perfil_id}}">{{$usuario->user}}</option>
                            @endforeach

                    </select>
                </div> --}}            
                <div class="mb-3 d-grid gap-2 d-lg-block">
                    <button type="reset" class="btn btn-warning">Cancelar</button>
                    <button type="submit" class="btn btn-success">Agregar Imagen</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection