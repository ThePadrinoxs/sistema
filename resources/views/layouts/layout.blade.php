<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRUEBA TECNICA</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    

<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#000000">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#000000">
<!-- Fonts from google -->
<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,500,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed&display=swap" rel="stylesheet">

<!-- All css files are included here. -->
<link rel="stylesheet" href="https://www.youdevs.com/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.youdevs.com/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.youdevs.com/assets/css/icofont.min.css">
<link rel="stylesheet" href="https://www.youdevs.com/assets/css/plugins.css">
<link rel="stylesheet" href="https://www.youdevs.com/assets/css/helper.css">
<link rel="stylesheet" href="https://www.youdevs.com/assets/css/style.css">

    </head>
<body>

    <div id="main-wrapper">
        <!--Header section start-->
<header class="header header-static bg-black header-sticky">
    <div class="default-header menu-right">
        <div class="container container-1520">
            <div class="row">

              
                <!--Menu start-->
                <div class="col-12 col-lg-6 order-md-3 order-lg-2 d-flex justify-content-center">
                    <nav class="main-menu menu-style-2">
                        <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </nav>
                </div>
                <!--Menu end-->

             

            </div>

            <!--Mobile Menu start-->
            <div class="row">
                <div class="col-12 d-flex d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
            <!--Mobile Menu end-->

        </div>
    </div>
</header>

            @yield('content')
       
        <!--Footer section start-->
<footer class="footer-section style-2 section bg-theme" style="">
       
    <!--Footer Top start-->
    <div class="footer-top section pt-80 pt-lg-50 pt-md-40 pt-sm-40 pt-xs-30 pb-70 pb-lg-50 pb-md-50 pb-sm-15 pb-xs-40">
        <div class="container container-1520">
            <div class="row justify-content-lg-between">
             
            </div>
        </div>
    </div>
    <!--Footer Top end-->

    <!--Footer bottom start-->
    
    <!--Footer bottom end-->

 </footer>
 <!--Footer section end-->    </div>

    <!-- All jquery file included here -->
    <script src="https://www.youdevs.com/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="https://www.youdevs.com/assets/js/popper.min.js"></script>
<script src="https://www.youdevs.com/assets/js/bootstrap.min.js"></script>
<script src="https://www.youdevs.com/assets/js/plugins.js"></script>
<script src="https://www.youdevs.com/assets/js/main.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
    const observer = lozad();
    observer.observe();
</script>    </body>
</html>