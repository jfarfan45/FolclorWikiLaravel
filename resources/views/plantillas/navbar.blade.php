<head><style>
        /* Agrega estilos CSS para cambiar el color de los enlaces */
        .navbar-nav a {
            color: black; /* Puedes cambiar este valor al color que prefieras */
        }

        /* Cambia el color del enlace activo */
        .navbar-nav .active a {
            color: #e74c3c; /* Puedes cambiar este valor al color que prefieras para el enlace activo */
        } 
    </style></head>
<link rel="stylesheet" href="{{ asset('css/estilos') }}">
<nav class="navbar navbar-expand-lg navbar-dark bg-white">
            <div class="container">
                <a class="navbar-brand" href="#!"><img src="{{ asset('images/folclorwiki-PhotoRoom.png-PhotoRoom.png') }}" alt=""  class="logo">></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <!-- Search widget-->                       
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="buscar tema..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Buscar</button>
                        </div>
                    </div>                        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    
                        <li class="nav-item"><a class="nav-link" href="{{ url('post')}}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('add')}}">Nuevo Post</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Cerrar sesion</a></li>
                        <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>//-->
                    </ul>
                </div>
            </div>
</nav>