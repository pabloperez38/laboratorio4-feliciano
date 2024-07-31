<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('css/sweetalert2.css')}}" />

    <link href="{{asset('css/app.css')}}" rel="stylesheet" />

    @stack('css')
</head>

<body>

    <div class="wrapper">

        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="{{route('home_index')}}">
                    <span class="align-middle">
                        <img height="50" src="{{ asset('img/logo-utn-2.png') }}" alt="Sistema web">
                    </span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">Administración</li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="{{route('home_index')}}">
                            <i class="align-middle fas fa-home"></i>
                            <span class="align-middle">Inicio</span>
                        </a>
                    </li>

                </ul>

            </div>
        </nav>

        <div class="main">

            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
            </nav>

            @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="{{ route('home_index') }}"><strong>UTN
                                        Laboratorio 4</strong></a>
                                &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">

                                    <div class="text-muted">Sistema de prueba</div>

                                </li> 
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sweetalert2.js')}}"></script>
    <script src="{{asset('js/funciones.js')}}"></script>

    @stack('script')

</body>

</html>