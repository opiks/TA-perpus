<!-- 
=============================================
   Nama : Muhamad Taufik Zamaludin
   NIM : 1120031026

   Nama : Muhamad Zulfiqor
   NIM : 1120031025

   Deskripsi Program : App Perpustakaan 
============================================= 
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Perpustakaan | @yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets/mainpage/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/mainpage/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/mainpage/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/mainpage/css/plyr.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/mainpage/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/mainpage/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/mainpage/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/mainpage/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html" style="color: white;">
                            App Perpustakaan
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{ route('books.index') }}">Home</a></li>
                                <li><a href="{{ route('books.category') }}">Kategori</a></li>
                                <li><a href="{{ route('books.search') }}">Cari Buku</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            @yield('content')
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="{{ route('books.index') }}">Home</a></li>
                            <li><a href="{{ route('books.category') }}">Kategori</a></li>
                            <li><a href="{{ route('books.search') }}">Cari Buku</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('assets/mainpage/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/mainpage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/mainpage/js/player.js') }}"></script>
    <script src="{{ asset('assets/mainpage/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/mainpage/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/mainpage/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/mainpage/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/mainpage/js/main.js') }}"></script>


</body>

</html>
