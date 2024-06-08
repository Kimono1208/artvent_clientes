 {{-- @extends('/plantilla/plantillad')

@section('titulo', $producto->titulo)

@section('contenido') --}}
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    {{-- <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet"> --}}

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<body>
    <header id="header" class="fixed-top d-flex align-items-center header-transparent" style="background-color: darkgreen">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1><a href="/"><span>ArtVent</span></a></h1>
            </div>
    
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('welcome') }}">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('about') }}">Acerca de</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('features') }}">Caracteristicas</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('gallery') }}">Galeria</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('team') }}">Equipo</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('pricing') }}">precios</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Mas opciones</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Mas opciones 1</a></li>
                            <li class="dropdown">
                                <a href="#"><span>Mas opciones 2</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <script>
        function filtcategories(c) {
            var all = document.querySelectorAll(".gallery-item");
            all.forEach(i => {
                if (c === 'all' || i.classList.contains(c)) {
                    i.parentNode.style.display = "block";
                } else {
                    i.parentNode.style.display = "none";
                }
            });
        }
    </script>
    
    <style>
        .gallery-item {
            width: 100%;
            height: 7.7rem;
            object-fit: cover;
        }
        #gallery_button {
            display: flex;
            gap: .5rem;
            flex-wrap: wrap;
        }
        #gallery_button > button {
            background-color: #91FE71;
            font-style: none;
            border: none;
            border-radius: 1rem;
            padding: 1rem;
            margin: 0 .4rem 0 0;
        }
        #gallery_button > button:hover {
            background-color: #2b4b21;
        }
    </style>
    
    <section id="gallery" class="gallery">
    <div class="container">
        <h2>{{ $producto->titulo }}</h2>
        <p>{{ $producto->descripcion }}</p>
    
        <h2 class="title_todo">Filtro por categorías</h2>
        <div id="gallery_button" class="p-5">
            <button onclick="filtcategories('all')">Mostrar todos</button>
            <button onclick="filtcategories('evento')">evento</button>
            <button onclick="filtcategories('trabajo')">trabajo</button>
            <button onclick="filtcategories('luces')">luces</button>
            <button onclick="filtcategories('sin_luces')">sin luces</button>
            <button onclick="filtcategories('extras')">extras</button>
        </div>
        <div class="section-title" data-aos="fade-up">
            <h2>Galeria</h2>
            <p>Checa nuestros estilos</p>
          </div>
        <div class="title_toldo" data-aos="fade-left">
            @foreach($producto->imagenes as $imagen)
            <div class="col-lg-3 col-md-4">
                <div class="{{ $imagen->categoria }}" data-aos="zoom-in" data-aos-delay="100">
                    <img src="gallery{{ asset('img/gallery/toldos_evento_3.jpg') }}" alt="" class="img-fluid"> 
               {{-- <a href="{{ $imagen->ubicacion }}" class="gallery-lightbox">
                        <img src="{{ $imagen->ubicacion }}" alt="" class="img-fluid">
                    </a>  --}}
                    <p>{{ $producto->descripcion }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Mas informacion</h3>
                            <p class="pb-3"><em>Ven conocenos, estamos al alcance de todos, nos ajustamos a tus precios.</em></p>
                            <p>
                                A108 Adam Street <br>
                                Guadalajara, JAL 535022, México<br><br>
                                <strong>Teléfono:</strong> +52 33 1234 5678<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Enlaces Útiles</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/about') }}">Acerca de nosotros</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/services') }}">Servicios</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('/archivos/Términos y Condiciones Artvent.pdf') }}">Términos de servicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/privacy-policy') }}">Política de privacidad</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Nuestros Servicios</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Diseño Web</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Desarrollo Web</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Gestión de Productos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Diseño Gráfico</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Nuestro Boletín</h4>
                        <p>Te esperamos, dudas o preguntas estamos a tu servicio</p>
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Tu Email"><input type="submit" value="Suscribirse">
                        </form>
                    </div>
                    
                    </div>
                    </div>
                    </div>
                    
                    <div class="container">
                        <div class="copyright">
                            &copy; Copyright <strong><span>ArtVent</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
                            Designed by <a href="https://bootstrapmade.com/">Kimonkey</a>
                        </div>
                    </div>
                    </footer><!-- End Footer -->







</body>
