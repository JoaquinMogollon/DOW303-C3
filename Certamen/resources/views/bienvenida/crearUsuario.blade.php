<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
</head>
<body style="background: linear-gradient(90deg, rgba(112,74,153,1) 0%, rgba(121,9,119,1) 15%, rgba(255,0,0,1) 100%);">
    <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-light" style="height: 25rem;">

                    <!-- Inicio sesion -->
                    <div class="col-lg-12 bg-white">
                        <h4>Crear Cuenta </h4>
                        <div class="card">
                            <div class="card-body">
                                <div class="col">
                                    <button type="redirect" class="btn btn-primary" href="{{route('bienvenida.sing')}}">Crear Usuario</button>
                                </div>
                                <form method="POST" action="{{-- {{route('bienvenida.login')}} --}}">
                                @csrf
                                    <div class="mb-3">
                                        <label for="user" class="form-label">Nombre de Usuario</label>
                                        <input type="text" id="user" name="user" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Ingrse su Nombre</label>
                                        <input type="text" id="nombre" name="nombre" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido" class="form-label">Ingrse su Apellido</label>
                                        <input type="text" id="apellido" name="apellido" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Perfil</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="pos-admin" name="perfil_id" value="Administrador" checked>
                                                <label class="form-check-label" for="pos-admin">Administrador</label>
                                            </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="pos-arte" name="perfil_id" value="Artista">
                                                    <label class="form-check-label" for="pos-arte">Artista</label>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-end">
                                            <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-warning mt-2">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        {{--/validaciones--}}
                    </div>
                    <!-- /fin formulario -->
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>