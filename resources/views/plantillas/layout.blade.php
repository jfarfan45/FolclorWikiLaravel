<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/js/app.js','resources/css/styles.css'])
</head>
<body>
<style>
    body{
      background-image: url('{{ asset('images/prueba.png') }}');
      ;
      background-position: ; /* Centra la imagen en la pantalla */
      ;
    }
 </style>
</body>

    @include('plantillas.navbar')
    @yield('content')
    @include('plantillas.footer')
</html>