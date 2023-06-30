<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body style="background: linear-gradient(90deg, rgba(112,74,153,1) 0%, rgba(121,9,119,1) 15%, rgba(255,0,0,1) 100%);">
    <div class="container-fluid vh-100 d-flex flex-column justify-content-lg-center">

        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-light" style="height: 25rem;">

                    <!-- Inicio sesion -->
                    <div class="col-lg-8 bg-white">
                        <h4>Inicio de Sesión</h4>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{-- {{route('user.login')}} --}}">
                                @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                    <div class="mb-3 text-end">
                                        <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                                    </div>
                                    <div class="mb-3 text-end">
                                        <button type="redirect" class="btn btn-success" onclick="/* {{route('user.create')}} */">Crear Usuario</button>
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