@extends('layouts.master')

@section('contenido-principal')

<!-- form agregar jugador -->
<div class="col-12 col-lg-4 order-first order-lg-last">
    <div class="card">
        <div class="card-header bg-dark text-white">Agregar Jugador</div>
        <div class="card-body">
            <form method="POST" action="{{-- {{route('jugadores.store')}} --}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" id="apellido" name="apellido" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Posición:</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="pos-arquero" name="posicion" value="Arquero" checked>
                            <label class="form-check-label" for="pos-arquero">Arquero</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="pos-defensa" name="posicion" value="Defensa">
                            <label class="form-check-label" for="pos-defensa">Defensa</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="pos-volante" name="posicion" value="Volante">
                            <label class="form-check-label" for="pos-volante">Volante</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="pos-delantero" name="posicion" value="Delantero">
                            <label class="form-check-label" for="pos-delantero">Delantero</label>
                        </div>
                        <div class="form-group">
                            <label for="numero">Número Camiseta:</label>
                            <input type="number" id="numero" name= "numero" class="form-control" min="1" max="99">
                        </div>
                        {{-- <div class="form-group">
                            <label for="equipo">Equipo:</label>
                            <select class="form-control" name="equipo" id="equipo">
                                @foreach ($equipos as $equipo)
                                    <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                                @endforeach

                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label for="imagen">Imagen:</label>
                            <input type="file" id="imagen" name="imagen" class="form-control-file">
                        </div>
                    </div>
                </div>
               
                <div class="mb-3 d-grid gap-2 d-lg-block">
                    <button type="reset" class="btn btn-warning">Cancelar</button>
                    <button type="submit" class="btn btn-success">Agregar Jugador</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection