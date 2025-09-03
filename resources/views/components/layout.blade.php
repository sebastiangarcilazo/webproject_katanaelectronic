<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('iconospersonalizados/katanaelectronic.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>KatanaElectronic || Inicio ||</title>
</head>
<body>
    <div id=”app”>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://127.0.0.1:8000">Katana Electronic</a>

                <button class="navbar-toggler" type="button" data-bs- toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria- label="Alternar menú de navegación">

                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <x-nav-link route="home"> 
                               <img src="{{ asset('iconospersonalizados/icon-home-personalizado.png') }}" alt="HomeIcon" style="width: 16px; height: 16px; display: inline;">
                                Home
                            </x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link route="contacto">
                                <img src="{{ asset('iconospersonalizados/icon-contacto-personalizado.png') }}" alt="ContactoIcon" style="width: 16px; height: 16px; display: inline;">
                                Contacto
                            </x-nav-link>
                        </li>
                         <li class="nav-item">
                            <x-nav-link route="galeria">
                                <img src="{{ asset('iconospersonalizados/icon-producto-personalizado.png') }}" alt="GaleriaIcon" style="width: 16px; height: 16px; display: inline;">
                                Galeria
                            </x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link route="productos.index">
                                 <img src="{{ asset('iconospersonalizados/icon-producto-personalizado.png') }}" alt="ProductIcon" style="width: 16px; height: 16px; display: inline;">
                                Listado de productos
                            </x-nav-link>
                        </li>
                        <li class="nav-item">
                        <x-nav-link route="ayuda"> 
                               <img src="{{ asset('iconospersonalizados/icon-ayuda-personalizado.png') }}" alt="AyudaIcon" style="width: 16px; height: 16px; display: inline;">
                                Ayuda
                            </x-nav-link>
                            </li>
                        <li class="nav-item">
                             <x-nav-link route="creadores_de_contenido"> 
                               <img src="{{ asset('iconospersonalizados/icon-creadores-personalizado.png') }}" alt="CreadoresIcon" style="width: 16px; height: 16px; display: inline;">
                                Creadores
                            </x-nav-link>
                            </li>
                            <li class="nav-item">
                             <x-nav-link route="noticias.index"> 
                               <img src="{{ asset('iconospersonalizados/icon-creadores-personalizado.png') }}" alt="CreadoresIcon" style="width: 16px; height: 16px; display: inline;">
                                Noticias
                            </x-nav-link>
                            </li>
                         @auth     
        @if (Auth::user()->role === 'admin')
            <li class="nav-item">
                <x-nav-link route="usuarios.index">
                    <img src="{{ asset('iconospersonalizados/icon-list-personalizado.png') }}" alt="UsuariosIcon" style="width: 16px; height: 16px; display: inline;">
                    Listado de Usuarios
                </x-nav-link>
            </li>
            
        @endif
        @if (Auth::user()->role === 'admin')
        <li class="nav-item">
                <x-nav-link route="clientes.index">
                    <img src="{{ asset('iconospersonalizados/icon-list-personalizado.png') }}" alt="ClientesIcon" style="width: 16px; height: 16px; display: inline;">
                    Listado de Clientes
                </x-nav-link>
            </li>
            @endif
    @endauth
    @guest
             <li class="nav-item">
             <x-nav-link route="auth.register">
                 <img src="{{ asset('iconospersonalizados/icon-register-personalizado.png') }}" alt="RegisterIcon" style="width: 16px; height: 16px; display: inline;">
                 Registrarte
                 </x-nav-link>
                 </li>
                 @endguest
    @auth
    @if (Auth::user()->role === 'admin')
        <li class="nav-item">
            <x-nav-link route="admin.mensajes">
                <img src="{{ asset('iconospersonalizados/icon-message.png') }}" alt="MensajesIcon" style="width: 16px; height: 16px; display: inline;">
                Mensajes de Contacto
            </x-nav-link>
        </li>
    @endif
@endauth
                  @auth
                            <li class="nav-item">
                                <form action="{{ route('auth.logout') }}" method="post" >
                                    @csrf
                                    <button type="submit" class="nav-link">
                                        <Strong>Cerrar Sesión</Strong>
                                    </button>

                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <x-nav-link route="auth.login">
                                     <img src="{{ asset('iconospersonalizados/icon-user-personalizado.png') }}" alt="LoginIcon" style="width: 16px; height: 16px; display: inline;">
                                    Iniciar Sesion
                                </x-nav-link>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <main class="p-4">
            @if (session()->has('feedback.message'))
                <div class="alert alert-{{ session()->get('feedback.type', 'success') }}">
                    {!! session()->get('feedback.message') !!}
                </div>
            @endif

            {{ $slot }}
        </main>
        <footer class="footer container-fluid d-md-none d-lg-block">
    <div class="container">
        <div class="footer-sections">
            <div class="footer-section">
                <h5>Sobre Nosotros</h5>
                <p>Somos una empresa lider dedicada a la venta de productos de PC.</p>
            </div>
            <div class="footer-section">
                <h5>Navegación</h5>
                <ul>
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('productos.index') }}">Productos</a></li>
                    <li><a href="#">Acerca de</a></li>
                   <li><a href="{{ route('contacto') }}">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h5>Contáctanos</h5>
                <p>Email: katanaelectronic@hotmail.com</p>
                <p>Teléfono: +54 9 11 3450 5602</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>2024 Katana Electronics. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
    </div>
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
