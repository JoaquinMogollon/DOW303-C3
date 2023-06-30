<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Centro de fotos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src={{asset('imagenes/isotipo_usm_color.jpg')}} width="40" height="34"  class="d-inline-block align-text-top">
                    DOW
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='bienvenida.index') active @endif" aria-current="page" href="{{route('bienvenida.index')}}">Inicio</a>
                        </li>
                        {{-- artista --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle @if(Route::current()->getName()=='alumno.alumno' or Route::current()->getName()=='alumno.propuesta') active @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Artista
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" aria-current="page" href="{{route('artista.artista')}}">Lista de Imagenes</a></li>
                                <li><a class="dropdown-item" aria-current="page" href="{{-- {{route('artista.artista')}} --}}">Lista de Imagenes Baneadas</a></li>
                                <li><a class="dropdown-item" aria-current="page" href="{{route('artista.subirfoto')}}">Subir Foto</a></li>
                            </ul>
                        </li>
                        {{-- fin artista --}}
                        
                        {{-- admin --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle @if(Route::current()->getName()=='admin.admin') active @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Administrador
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" aria-current="page" href="{{route('admin.admin')}}">Ultimas fotos subidas</a></li>
                                <li><a class="dropdown-item" aria-current="page" href="{{route('admin.admin')}}">Lista de Usuarios</a></li>
                                <li><a class="dropdown-item" aria-current="page" href="{{route('admin.admin')}}">Fotos Baneadas</a></li>
                            </ul>
                        </li>
                        {{-- fin admin --}}
                        <li class="nav-item">
                            <a class="nav-link text-left" href="{{route('bienvenida.login')}}" class="nav-link active">Cerrar Secion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

        @yield('contenido-principal')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
    
</body>
</html>