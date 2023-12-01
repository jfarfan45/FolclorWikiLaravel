
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos') }}">
    
</head>
<body>
<style>
        .fondo {
  background-image: url('{{ asset('images/prueba.png') }}');;
  background-size: cover;
    }
        
</style>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto miDiv" >
        <div class="card card0 border-0 fondo">
        <nav class="navbar navbar-expand-md navbar-light bg-vlue shadow-sm ">
            <div class="container">
                
            


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                                 <li class="nav-item">
                                    <a class="nav-link" href="http://127.0.0.1:8000/login">ingresar</a>
                                </li>                    
                                <li class="nav-item">
                                    <a class="nav-link" href="http://127.0.0.1:8000/register">registrarse</a>
                                </li>
                    </ul>
                </div>
            </div>
        </nav>
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row" >
                        <img src="{{ asset('images/folclorwiki-PhotoRoom.png-PhotoRoom.png') }}" class="logo">
                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                        <figure class="text-center">
    <blockquote class="blockquote">
        <h1>Si te gusta el contenido relacionado a la cultura de tu país y del mundo, estas en el lugar indicado.</h1>   
        <p>Encuentra o publica información folclórica, tambien conoce gente  con tus mismos intereses</p>
    </blockquote>
    </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 centrar">
                
                <form action="{{ route('login')}}" method="post"> 
                    @csrf
                    <div class="card2  border-0 px-4 py-5">
                    <div class="row px-3">
                        <h2>Bienvenido</h2><br><br><br>
                        <label class="mb-1"><h6 class="mb-0 text-sm">correo electrónico</h6></label>
                        <input id="email" type="email" placeholder="ingrese su correo" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">contraseña</h6></label>
                        <input id="password" type="password" placeholder="ingrese su contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <br>
                                @if (Route::has('password.request'))
                                    <a class=" btn-link" href="{{ route('password.request') }}">
                                        {{ __('olvide mi contraseña') }}
                                    </a>
                                @endif
                    </div>
                    <div class="row mb-3 px-3">
                        <button type="submit" class="btn "><h5><span style="color: white;">INGRESAR</span></h5></button>
                    </div>
                    <div class="row mb-4 px-3">
                        <small class="font-weight-bold">¿Aún no tienes usuario? <a href="http://127.0.0.1:8000/register" class="text-danger ">Registrate</a>.</a></small>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3">
                <small class="ml-4 ml-sm-5 mb-2">JAHIR ESTEBAN FARFAN PINEDA</small>
                <small class="ml-4 ml-sm-5 mb-2">SERVICIO NACIONAL DE APRENDIZAJE</small> 
                <div class="social-contact ml-4 ml-sm-auto">
                    <span class="fa fa-facebook mr-4 text-sm"></span>
                    <span class="fa fa-google-plus mr-4 text-sm"></span>
                    <span class="fa fa-linkedin mr-4 text-sm"></span>
                    <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>