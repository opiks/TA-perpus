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
<html lang="en">

<!-- Mirrored from seantheme.com/studio/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 08:45:05 GMT -->

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('assets/adminpage/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/adminpage/css/app.min.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- ================== END core-css ================== -->

</head>

<body>
    <!-- BEGIN #app -->
    <div id="app" class="app">
        <!-- BEGIN #header -->
        <div id="header" class="app-header">
            <!-- BEGIN mobile-toggler -->
            <div class="mobile-toggler">
                <button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <!-- END mobile-toggler -->

            <!-- BEGIN brand -->
            <div class="brand">
                <div class="desktop-toggler">
                    <button type="button" class="menu-toggler" data-toggle="sidebar-minify">
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>
                </div>

                <a href="#" class="brand-logo">
                    Perpustakaan
                </a>
            </div>
            <!-- END brand -->

            <!-- BEGIN menu -->
            <div class="menu">
                <div class="menu-search">
                </div>
                <div class="menu-item dropdown">
                </div>
                <div class="menu-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                        <div class="menu-img online">
                            <img src="{{ asset('assets/adminpage/img/user/user.jpg') }}" alt=""
                                class="mw-100 mh-100 rounded-circle" />
                        </div>
                        <div class="menu-text">Admin</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-3">
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Log Out <i class="fa fa-toggle-off fa-fw ms-auto text-gray-400 fs-16px"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <!-- END menu -->
        </div>
        <!-- END #header -->

        <!-- BEGIN #sidebar -->
        <div id="sidebar" class="app-sidebar">
            <!-- BEGIN scrollbar -->
            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
                <!-- BEGIN menu -->
                <div class="menu">
                    <div class="menu-header">Menu</div>
                    <div class="menu-item active">
                        <a href="index-2.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-laptop"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('admin.kategori.index') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-bookmark"></i></span>
                            <span class="menu-text">Kategori Buku</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('admin.lokasi.index') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-location-arrow"></i></span>
                            <span class="menu-text">Lokasi Buku</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('admin.tipe.index') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-tags"></i></span>
                            <span class="menu-text">Tipe Buku</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('admin.buku.index') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-book"></i></span>
                            <span class="menu-text">Buku</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('admin.peminjaman.index') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-tasks"></i></span>
                            <span class="menu-text">Peminjaman</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('admin.member.index') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-user-circle"></i></span>
                            <span class="menu-text">Member</span>
                        </a>
                    </div>
                </div>
                <!-- END menu -->
            </div>
            <!-- END scrollbar -->

            <!-- BEGIN mobile-sidebar-backdrop -->
            <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
            <!-- END mobile-sidebar-backdrop -->
        </div>
        <!-- END #sidebar -->

        <!-- BEGIN #content -->
        <div id="content" class="app-content">
            @yield('content')
        </div>
        <!-- END #content -->

        <!-- BEGIN btn-scroll-top -->
        <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
        <!-- END btn-scroll-top -->
    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('assets/adminpage/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/adminpage/js/app.min.js') }}"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
    <script src="{{ asset('assets/adminpage/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/adminpage/js/demo/dashboard.demo.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.ckeditor.com/4.19.0/basic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- ================== END page-js ================== -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-53034621-1', 'auto');
        ga('send', 'pageview');
    </script>
    @yield('javascript')
</body>

<!-- Mirrored from seantheme.com/studio/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 08:45:30 GMT -->

</html>
