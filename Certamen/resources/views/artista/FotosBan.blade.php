@extends('layouts.master')

@section('contenido-principal')

    {{-- mostrar imagenes baneadas --}}
    @foreach ($imagenes as $num=>$imagen)        
        <div class="row">
            <div class="card" style="width: 15cm"> 
                <card-header>
                <img src="{{Storage::url($imagen->archivo)}}" alt="{{$imagen->titulo}}" class="card-img-top"> {{-- error, la imagen es tomada y buscada, pero por error de como esta formada en si la BD proporciona un error --}}
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Número: </b>{{$num+1}}</li>
                    <li class="list-group-item"><b>Titulo: </b>{{$imagen->titulo}}</li>
                    <li class="list-group-item"><b>Usuario: </b>{{$imagen->cuenta_user}}</li>
                </ul>
                </card-header>
            </div>
        </div>
    @endforeach

@endsection