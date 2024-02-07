@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-image: url('{{ asset('images/prueba.png') }}');;
        background-size: cover;
    }
    .cuadro {
        background-color: rgba(32, 61, 245, 0.2);
    }
</style>
    
</head>
<body>
<div id="app">
<div class="container"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style ="background-color: rgba(77, 92, 106, 0.47)">
                <div class="card-header">Registro Nuevos usuarios</div>

                <div class="card-body" style ="background-color: rgba(153, 193, 232, 0.66)">
                    <form method="POST" action="http://127.0.0.1:8000/register">
                        <input type="hidden" name="_token" value="Jh30glvAySJ7YYbQ8ktjwDk1x90E9Srpv1ylyail" autocomplete="off">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">nombre y apellido</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" value="" required="" autocomplete="name" autofocus="">

                                                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">correo electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value="" required="" autocomplete="email">

                                                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password" required="" autocomplete="new-password">

                                                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar usuario
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




        </main>
    </div> 
</body>
</html>
@endsection
