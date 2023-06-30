@extends ('layouts.master')

@section('contenido-principal')

<div class="container-fluid">
    {{-- mostrar imagenes --}}
    @foreach ($imagenes as $num=>$imagen)        
        <div class="row">
            <div class="card" style="width: 15cm"> 
                <card-header>
                <img src="{{Storage::url($imagen->archivo)}}" alt="{{$imagen->titulo}}" class="card-img-top"> {{-- error, la imagen es tomada y buscada, pero por error de como esta formada en si la BD proporciona un error --}}
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Número: </b>{{$num+1}}</li>
                    <li class="list-group-item"><b>Titulo: </b>{{$imagen->titulo}}</li>
                    <li class="list-group-item"><b>Usuario: </b>{{$imagen->cuenta_user}}</li>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-warning">Editar
                                <a href="{{-- {{route('imagenes.edit',$imagen->id)}} --}}"
                                
                                    data-bs-toggle="tooltip"
                                    data-bs-title="Editar {{$imagen->titulo}}"
                                    
                                    >
                                </a>
                            </button>
                            <button class="btn btn-danger">Eliminar</button>
                        </div>
                    </div>
                </ul>
                </card-header>
            </div>
        </div>
    @endforeach


    {{-- <div class="col">
        <div class="card mt-3" style="width: 14rem;">
            <img src={{asset('Artista1/Tiempo.jpg')}} class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">El tiempo</h5>
                <p class="card-text">Si no cuidamos nuestro tiempo, este nos consume poco a poco</p>
                <a href="#" class="btn btn-primary">Ver Artista</a>
            </div>
        </div>
    </div> --}}
</div>

@endsection