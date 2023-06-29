@extends ('layouts.master')

@section('contenido-principal')

<div class="container-fluid">
    <div class="row">
        <div class="col mt-1">
            <a href="#" class="btn btn-sm btn-secondary pb-0 text-black" data-bs-toggle="tooltip" data-bs-title="Agregar Fotos">
                <span class="material-icons">Agregar Fotos</span>
            </a>
            <a href="#" class="btn btn-sm btn-secondary pb-0 text-black">
                <span class="material-icons">Editar fotos</span>
            </a>
            <a href="#" class="btn btn-sm btn-secondary pb-0 text-black">
                <span class="material-icons">Eliminar fotos</span>
            </a>
        </div>
    </div>
    <div class="col">
        <div class="card mt-3" style="width: 14rem;">
            <img src={{asset('Artista1/Tiempo.jpg')}} class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">El tiempo</h5>
                <p class="card-text">Si no cuidamos nuestro tiempo, este nos consume poco a poco</p>
                <a href="#" class="btn btn-primary">Ver Artista</a>
            </div>
        </div>
    </div>
</div>

@endsection