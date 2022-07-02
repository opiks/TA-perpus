<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/studio/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 08:45:05 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Studio | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('assets/adminpage/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/adminpage/css/app.min.css') }}" rel="stylesheet" />
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
                    <img src="assets/img/logo.png" alt="" height="20" />
                </a>
            </div>
            <!-- END brand -->

            <!-- BEGIN menu -->
            <div class="menu">
                <form class="menu-search" method="POST" name="header_search_form">
                    <div class="menu-search-icon"><i class="fa fa-search"></i></div>
                    <div class="menu-search-input">
                        <input type="text" class="form-control" placeholder="Search menu..." />
                    </div>
                </form>
                <div class="menu-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-bell nav-icon"></i></div>
                        <div class="menu-label">3</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-notification">
                        <h6 class="dropdown-header text-gray-900 mb-1">Notifications</h6>
                        <a href="#" class="dropdown-notification-item">
                            <div class="dropdown-notification-icon">
                                <i class="fa fa-receipt fa-lg fa-fw text-success"></i>
                            </div>
                            <div class="dropdown-notification-info">
                                <div class="title">Your store has a new order for 2 items totaling $1,299.00</div>
                                <div class="time">just now</div>
                            </div>
                            <div class="dropdown-notification-arrow">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </a>
                        <a href="#" class="dropdown-notification-item">
                            <div class="dropdown-notification-icon">
                                <i class="far fa-user-circle fa-lg fa-fw text-muted"></i>
                            </div>
                            <div class="dropdown-notification-info">
                                <div class="title">3 new customer account is created</div>
                                <div class="time">2 minutes ago</div>
                            </div>
                            <div class="dropdown-notification-arrow">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </a>
                        <a href="#" class="dropdown-notification-item">
                            <div class="dropdown-notification-icon">
                                <img src="assets/img/icon/android.svg" alt="" width="26" />
                            </div>
                            <div class="dropdown-notification-info">
                                <div class="title">Your android application has been approved</div>
                                <div class="time">5 minutes ago</div>
                            </div>
                            <div class="dropdown-notification-arrow">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </a>
                        <a href="#" class="dropdown-notification-item">
                            <div class="dropdown-notification-icon">
                                <img src="assets/img/icon/paypal.svg" alt="" width="26" />
                            </div>
                            <div class="dropdown-notification-info">
                                <div class="title">Paypal payment method has been enabled for your store</div>
                                <div class="time">10 minutes ago</div>
                            </div>
                            <div class="dropdown-notification-arrow">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </a>
                        <div class="p-2 text-center mb-n1">
                            <a href="#" class="text-gray-800 text-decoration-none">See all</a>
                        </div>
                    </div>
                </div>
                <div class="menu-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                        <div class="menu-img online">
                            <img src="assets/img/user/user.jpg" alt=""
                                class="mw-100 mh-100 rounded-circle" />
                        </div>
                        <div class="menu-text">seantheme@gmail.com</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-3">
                        <a class="dropdown-item d-flex align-items-center" href="#">Edit Profile <i
                                class="fa fa-user-circle fa-fw ms-auto text-gray-400 fs-16px"></i></a>
                        <a class="dropdown-item d-flex align-items-center" href="#">Inbox <i
                                class="fa fa-envelope fa-fw ms-auto text-gray-400 fs-16px"></i></a>
                        <a class="dropdown-item d-flex align-items-center" href="#">Calendar <i
                                class="fa fa-calendar-alt fa-fw ms-auto text-gray-400 fs-16px"></i></a>
                        <a class="dropdown-item d-flex align-items-center" href="#">Setting <i
                                class="fa fa-wrench fa-fw ms-auto text-gray-400 fs-16px"></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center" href="#">Log Out <i
                                class="fa fa-toggle-off fa-fw ms-auto text-gray-400 fs-16px"></i></a>
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
                    <div class="menu-header">Navigation</div>
                    <div class="menu-item active">
                        <a href="index-2.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-laptop"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="analytics.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-chart-pie"></i></span>
                            <span class="menu-text">Analytics</span>
                        </a>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="#" class="menu-link">
                            <span class="menu-icon">
                                <i class="fa fa-envelope"></i>
                                <span class="menu-icon-label">6</span>
                            </span>
                            <span class="menu-text">Email</span>
                            <span class="menu-caret"><b class="caret"></b></span>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="email_inbox.html" class="menu-link">
                                    <span class="menu-text">Inbox</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="email_compose.html" class="menu-link">
                                    <span class="menu-text">Compose</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="email_detail.html" class="menu-link">
                                    <span class="menu-text">Detail</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-divider"></div>
                    <div class="menu-header">Components</div>
                    <div class="menu-item">
                        <a href="widgets.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-qrcode"></i></span>
                            <span class="menu-text">Widgets</span>
                        </a>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="#" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-heart"></i></span>
                            <span class="menu-text">UI Kits</span>
                            <span class="menu-caret"><b class="caret"></b></span>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="ui_bootstrap.html" class="menu-link">
                                    <span class="menu-text">Bootstrap</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_buttons.html" class="menu-link">
                                    <span class="menu-text">Buttons</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_card.html" class="menu-link">
                                    <span class="menu-text">Card</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_icons.html" class="menu-link">
                                    <span class="menu-text">Icons</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_modal_notification.html" class="menu-link">
                                    <span class="menu-text">Modal & Notification</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_typography.html" class="menu-link">
                                    <span class="menu-text">Typography</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_tabs_accordions.html" class="menu-link">
                                    <span class="menu-text">Tabs & Accordions</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="#" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-file-alt"></i></span>
                            <span class="menu-text">Forms</span>
                            <span class="menu-caret"><b class="caret"></b></span>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="form_elements.html" class="menu-link">
                                    <span class="menu-text">Form Elements</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="form_plugins.html" class="menu-link">
                                    <span class="menu-text">Form Plugins</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="form_wizards.html" class="menu-link">
                                    <span class="menu-text">Wizards</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="#" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-table"></i></span>
                            <span class="menu-text">Tables</span>
                            <span class="menu-caret"><b class="caret"></b></span>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="table_elements.html" class="menu-link">
                                    <span class="menu-text">Table Elements</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_plugins.html" class="menu-link">
                                    <span class="menu-text">Table Plugins</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="#" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-chart-bar"></i></span>
                            <span class="menu-text">Charts</span>
                            <span class="menu-caret"><b class="caret"></b></span>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="chart_js.html" class="menu-link">
                                    <span class="menu-text">Chart.js</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="chart_apex.html" class="menu-link">
                                    <span class="menu-text">Apexcharts.js</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a href="map.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-map-marker-alt"></i></span>
                            <span class="menu-text">Map</span>
                        </a>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="#" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-code-branch"></i></span>
                            <span class="menu-text">Layout</span>
                            <span class="menu-caret"><b class="caret"></b></span>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="layout_starter.html" class="menu-link">
                                    <span class="menu-text">Starter Page</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="layout_fixed_footer.html" class="menu-link">
                                    <span class="menu-text">Fixed Footer</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="layout_full_height.html" class="menu-link">
                                    <span class="menu-text">Full Height</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="layout_full_width.html" class="menu-link">
                                    <span class="menu-text">Full Width</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="layout_boxed_layout.html" class="menu-link">
                                    <span class="menu-text">Boxed Layout</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="layout_minified_sidebar.html" class="menu-link">
                                    <span class="menu-text">Minified Sidebar</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="#" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-globe"></i></span>
                            <span class="menu-text">Pages</span>
                            <span class="menu-caret"><b class="caret"></b></span>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="page_scrum_board.html" class="menu-link">
                                    <span class="menu-text">Scrum Board</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_products.html" class="menu-link">
                                    <span class="menu-text">Products</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_orders.html" class="menu-link">
                                    <span class="menu-text">Orders</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_gallery.html" class="menu-link">
                                    <span class="menu-text">Gallery</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_search_results.html" class="menu-link">
                                    <span class="menu-text">Search Results</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_coming_soon.html" class="menu-link">
                                    <span class="menu-text">Coming Soon Page</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_404_error.html" class="menu-link">
                                    <span class="menu-text">404 Error Page</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_login.html" class="menu-link">
                                    <span class="menu-text">Login</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_register.html" class="menu-link">
                                    <span class="menu-text">Register</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-divider"></div>
                    <div class="menu-header">Users</div>
                    <div class="menu-item">
                        <a href="profile.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-user-circle"></i></span>
                            <span class="menu-text">Profile</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="calendar.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-calendar"></i></span>
                            <span class="menu-text">Calendar</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="settings.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-cog"></i></span>
                            <span class="menu-text">Settings</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="helper.html" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-question-circle"></i></span>
                            <span class="menu-text">Helper</span>
                        </a>
                    </div>
                    <div class="p-3 px-4 mt-auto hide-on-minified">
                        <a href="documentation/index.html"
                            class="btn d-block btn-secondary font-weight-600 rounded-pill" target="_blank">
                            <i class="fa fa-code-branch me-1 ms-n1 opacity-5"></i> Documentation
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
            <h1 class="page-header mb-3">
                Hi, Sean. <small>here's what's happening with your store today.</small>
            </h1>

            <!-- BEGIN row -->
            <div class="row">
                <!-- BEGIN col-6 -->
                <div class="col-xl-6">
                    <!-- BEGIN card -->
                    <div class="card text-white-transparent-7 mb-3 overflow-hidden">
                        <!-- BEGIN card-img-overlay -->
                        <div class="card-img-overlay d-block d-lg-none bg-blue rounded"></div>
                        <!-- END card-img-overlay -->

                        <!-- BEGIN card-img-overlay -->
                        <div class="card-img-overlay d-none d-md-block bg-blue rounded"
                            style="background-image: url(assets/img/bg/wave-bg.png); background-position: right bottom; background-repeat: no-repeat; background-size: 100%;">
                        </div>
                        <!-- END card-img-overlay -->

                        <!-- BEGIN card-img-overlay -->
                        <div class="card-img-overlay d-none d-md-block bottom-0 top-auto">
                            <div class="row">
                                <div class="col-md-8 col-xl-6"></div>
                                <div class="col-md-4 col-xl-6 mb-n2">
                                    <img src="assets/img/page/dashboard.svg" alt=""
                                        class="d-block ms-n3 mb-5" style="max-height: 310px" />
                                </div>
                            </div>
                        </div>
                        <!-- END card-img-overlay -->

                        <!-- BEGIN card-body -->
                        <div class="card-body position-relative">
                            <!-- BEGIN row -->
                            <div class="row">
                                <!-- BEGIN col-8 -->
                                <div class="col-md-8">
                                    <!-- stat-top -->
                                    <div class="d-flex">
                                        <div class="me-auto">
                                            <h5 class="text-white-transparent-8 mb-3">Weekly Earning</h5>
                                            <h3 class="text-white mt-n1 mb-1">$2,999.80</h3>
                                            <p class="mb-1 text-white-transparent-6 text-truncate">
                                                <i class="fa fa-caret-up"></i> <b>32%</b> increase compare to last week
                                            </p>
                                        </div>
                                    </div>

                                    <hr class="hr-transparent bg-white-transparent-2 mt-3 mb-3" />

                                    <!-- stat-bottom -->
                                    <div class="row">
                                        <div class="col-6 col-lg-5">
                                            <div class="mt-1">
                                                <i
                                                    class="fa fa-fw fa-shopping-bag fs-28px text-black-transparent-5"></i>
                                            </div>
                                            <div class="mt-1">
                                                <div>Store Sales</div>
                                                <div class="font-weight-600 text-white">$1,629.80</div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-5">
                                            <div class="mt-1">
                                                <i class="fa fa-fw fa-retweet fs-28px text-black-transparent-5"></i>
                                            </div>
                                            <div class="mt-1">
                                                <div>Referral Sales</div>
                                                <div class="font-weight-600 text-white">$700.00</div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="hr-transparent bg-white-transparent-2 mt-3 mb-3" />

                                    <div class="mt-3 mb-2">
                                        <a href="#"
                                            class="btn btn-yellow btn-rounded btn-sm ps-5 pe-5 pt-2 pb-2 fs-14px font-weight-600"><i
                                                class="fa fa-wallet me-2 ms-n2"></i> Withdraw money</a>
                                    </div>
                                    <p class="fs-12px">
                                        It usually takes 3-5 business days for transferring the earning to your bank
                                        account.
                                    </p>
                                </div>
                                <!-- END col-8 -->

                                <!-- BEGIN col-4 -->
                                <div class="col-md-4 d-none d-md-block" style="min-height: 380px;"></div>
                                <!-- END col-4 -->
                            </div>
                            <!-- END row -->
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->
                </div>
                <!-- END col-6 -->

                <!-- BEGIN col-6 -->
                <div class="col-xl-6">
                    <!-- BEGIN row -->
                    <div class="row">
                        <!-- BEGIN col-6 -->
                        <div class="col-sm-6">
                            <!-- BEGIN card -->
                            <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-orange"
                                style="min-height: 202px;">
                                <!-- BEGIN card-img-overlay -->
                                <div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
                                    <img src="assets/img/icon/order.svg" alt="" class="ms-auto d-block mb-n3"
                                        style="max-height: 105px" />
                                </div>
                                <!-- END card-img-overlay -->

                                <!-- BEGIN card-body -->
                                <div class="card-body position-relative">
                                    <h5 class="text-white-transparent-8 mb-3 fs-16px">New Orders</h5>
                                    <h3 class="text-white mt-n1">56</h3>
                                    <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                        <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%">
                                        </div>
                                    </div>
                                    <div class="text-white-transparent-8 mb-4"><i class="fa fa-caret-up"></i> 16%
                                        increase <br />compare to last week</div>
                                    <div><a href="#"
                                            class="text-white d-flex align-items-center text-decoration-none">View
                                            report <i
                                                class="fa fa-chevron-right ms-2 text-white-transparent-5"></i></a>
                                    </div>
                                </div>
                                <!-- BEGIN card-body -->
                            </div>
                            <!-- END card -->

                            <!-- BEGIN card -->
                            <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-teal"
                                style="min-height: 202px;">
                                <!-- BEGIN card-img-overlay -->
                                <div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
                                    <img src="assets/img/icon/visitor.svg" alt=""
                                        class="ms-auto d-block mb-n3" style="max-height: 105px" />
                                </div>
                                <!-- END card-img-overlay -->

                                <!-- BEGIN card-body -->
                                <div class="card-body position-relative">
                                    <h5 class="text-white-transparent-8 mb-3 fs-16px">Page Visitors</h5>
                                    <h3 class="text-white mt-n1">60.5k</h3>
                                    <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                        <div class="progrss-bar progress-bar-striped bg-white" style="width: 50%">
                                        </div>
                                    </div>
                                    <div class="text-white-transparent-8 mb-4"><i class="fa fa-caret-up"></i> 33%
                                        increase <br />compare to last week</div>
                                    <div><a href="#"
                                            class="text-white d-flex align-items-center text-decoration-none">View
                                            report <i
                                                class="fa fa-chevron-right ms-2 text-white-transparent-5"></i></a>
                                    </div>
                                </div>
                                <!-- END card-body -->
                            </div>
                            <!-- END card -->
                        </div>
                        <!-- END col-6 -->

                        <!-- BEGIN col-6 -->
                        <div class="col-sm-6">
                            <!-- BEGIN card -->
                            <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-pink"
                                style="min-height: 202px;">
                                <!-- BEGIN card-img-overlay -->
                                <div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
                                    <img src="assets/img/icon/email.svg" alt="" class="ms-auto d-block mb-n3"
                                        style="max-height: 105px" />
                                </div>
                                <!-- END card-img-overlay -->

                                <!-- BEGIN card-body -->
                                <div class="card-body position-relative">
                                    <h5 class="text-white-transparent-8 mb-3 fs-16px">Unread email</h5>
                                    <h3 class="text-white mt-n1">30</h3>
                                    <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                        <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%">
                                        </div>
                                    </div>
                                    <div class="text-white-transparent-8 mb-4"><i class="fa fa-caret-down"></i> 5%
                                        decrease <br />compare to last week</div>
                                    <div><a href="#"
                                            class="text-white d-flex align-items-center text-decoration-none">View
                                            report <i
                                                class="fa fa-chevron-right ms-2 text-white-transparent-5"></i></a>
                                    </div>
                                </div>
                                <!-- END card-body -->
                            </div>
                            <!-- END card -->

                            <!-- BEGIN card -->
                            <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-indigo"
                                style="min-height: 202px;">
                                <!-- BEGIN card-img-overlay -->
                                <div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
                                    <img src="assets/img/icon/browser.svg" alt=""
                                        class="ms-auto d-block mb-n3" style="max-height: 105px" />
                                </div>
                                <!-- end card-img-overlay -->

                                <!-- BEGIN card-body -->
                                <div class="card-body position-relative">
                                    <h5 class="text-white-transparent-8 mb-3 fs-16px">Page Views</h5>
                                    <h3 class="text-white mt-n1">320.4k</h3>
                                    <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                        <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%">
                                        </div>
                                    </div>
                                    <div class="text-white-transparent-8 mb-4"><i class="fa fa-caret-up"></i> 20%
                                        increase <br />compare to last week</div>
                                    <div><a href="#"
                                            class="text-white d-flex align-items-center text-decoration-none">View
                                            report <i
                                                class="fa fa-chevron-right ms-2 text-white-transparent-5"></i></a>
                                    </div>
                                </div>
                                <!-- END card-body -->
                            </div>
                            <!-- END card -->
                        </div>
                        <!-- BEGIN col-6 -->
                    </div>
                    <!-- END row -->
                </div>
                <!-- END col-6 -->
            </div>
            <!-- END row -->

            <!-- BEGIN row -->
            <div class="row">
                <!-- BEGIN col-6 -->
                <div class="col-xl-6">
                    <!-- BEGIN row -->
                    <div class="row">
                        <!-- BEGIN col-6 -->
                        <div class="col-6">
                            <!-- BEGIN card -->
                            <div class="card mb-3">
                                <!-- BEGIN card-body -->
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1">Total Users</h5>
                                            <div>Store user account registration</div>
                                        </div>
                                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                class="fa fa-redo"></i></a>
                                    </div>

                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h3 class="mb-1">184,593</h3>
                                            <div class="text-success font-weight-600 fs-13px">
                                                <i class="fa fa-caret-up"></i> +3.59%
                                            </div>
                                        </div>
                                        <div
                                            class="width-50 height-50 bg-primary-transparent-2 rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-user fa-lg text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- END card-body -->
                            </div>
                            <!-- END card -->

                            <!-- BEGIN card -->
                            <div class="card mb-3">
                                <!-- BEGIN card-body -->
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1">Social Media</h5>
                                            <div>Facebook page stats overview</div>
                                        </div>
                                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                class="fa fa-redo"></i></a>
                                    </div>

                                    <!-- BEGIN row -->
                                    <div class="row">
                                        <!-- BEGIN col-6 -->
                                        <div class="col-6 text-center">
                                            <div
                                                class="width-50 height-50 bg-primary-transparent-2 rounded-circle d-flex align-items-center justify-content-center mb-2 ms-auto me-auto">
                                                <i class="fa fa-thumbs-up fa-lg text-primary"></i>
                                            </div>
                                            <div class="font-weight-600 text-dark">306.5k</div>
                                            <div class="fs-13px">Likes</div>
                                        </div>
                                        <!-- END col-6 -->

                                        <!-- BEGIN col-6 -->
                                        <div class="col-6 text-center">
                                            <div
                                                class="width-50 height-50 bg-primary-transparent-2 rounded-circle d-flex align-items-center justify-content-center mb-2 ms-auto me-auto">
                                                <i class="fa fa-comments fa-lg text-primary"></i>
                                            </div>
                                            <div class="font-weight-600 text-dark">27.5k</div>
                                            <div class="fs-13px">Comments</div>
                                        </div>
                                        <!-- END col-6 -->
                                    </div>
                                    <!-- END row -->
                                </div>
                                <!-- END card-body -->
                            </div>
                            <!-- END card -->
                        </div>
                        <!-- END col-6 -->

                        <!-- BEGIN col-6 -->
                        <div class="col-6">
                            <!-- BEGIN card -->
                            <div class="card mb-3">
                                <!-- BEGIN card-body -->
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1">Web Traffic</h5>
                                            <div class="fs-13px">Traffic source and category</div>
                                        </div>
                                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                class="fa fa-redo"></i></a>
                                    </div>

                                    <div class="mb-4">
                                        <h3 class="mb-1">320,958</h3>
                                        <div class="text-success fs-13px font-weight-600">
                                            <i class="fa fa-caret-up"></i> +20.9%
                                        </div>
                                    </div>

                                    <div class="progress mb-4" style="height: 10px;">
                                        <div class="progress-bar" style="width: 42.66%"></div>
                                        <div class="progress-bar bg-teal" style="width: 36.80%"></div>
                                        <div class="progress-bar bg-yellow" style="width: 15.34%"></div>
                                        <div class="progress-bar bg-pink" style="width: 9.20%"></div>
                                        <div class="progress-bar bg-gray-200" style="width: 5.00%"></div>
                                    </div>

                                    <div class="fs-13px">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-grow-1 d-flex align-items-center">
                                                <i class="fa fa-circle fs-9px fa-fw text-primary me-2"></i> Direct
                                                visit
                                            </div>
                                            <div class="font-weight-600 text-dark">42.66%</div>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-grow-1 d-flex align-items-center">
                                                <i class="fa fa-circle fs-9px fa-fw text-teal me-2"></i> Organic Search
                                            </div>
                                            <div class="font-weight-600 text-dark">36.80%</div>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-grow-1 d-flex align-items-center">
                                                <i class="fa fa-circle fs-9px fa-fw text-warning me-2"></i> Referral
                                                Website
                                            </div>
                                            <div class="font-weight-600 text-dark">15.34%</div>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-grow-1 d-flex align-items-center">
                                                <i class="fa fa-circle fs-9px fa-fw text-danger me-2"></i> Social
                                                Networks
                                            </div>
                                            <div class="font-weight-600 text-dark">9.20%</div>
                                        </div>
                                        <div class="d-flex align-items-center mb-15px">
                                            <div class="flex-grow-1 d-flex align-items-center">
                                                <i class="fa fa-circle fs-9px fa-fw text-gray-200 me-2"></i> Others
                                            </div>
                                            <div class="font-weight-600 text-dark">5.00%</div>
                                        </div>
                                        <div class="fs-12px text-end">
                                            <span class="fs-10px">powered by </span>
                                            <span class="d-inline-flex font-weight-600">
                                                <span class="text-primary">G</span>
                                                <span class="text-danger">o</span>
                                                <span class="text-warning">o</span>
                                                <span class="text-primary">g</span>
                                                <span class="text-green">l</span>
                                                <span class="text-danger">e</span>
                                            </span>
                                            <span class="fs-10px">Analytics API</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- END card-body -->
                            </div>
                            <!-- END card -->
                        </div>
                        <!-- END col-6 -->
                    </div>
                    <!-- END row -->
                </div>
                <!-- END col-6 -->

                <!-- BEGIN col-6 -->
                <div class="col-xl-6">
                    <!-- BEGIN card -->
                    <div class="card mb-3">
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1">
                                    <h5 class="mb-1">Sales Analytics</h5>
                                    <div class="fs-13px">Weekly sales performance chart</div>
                                </div>
                                <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                        class="fa fa-redo"></i></a>
                            </div>
                            <div id="chart"></div>
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->
                </div>
                <!-- END col-6 -->
            </div>
            <!-- END row -->

            <!-- BEGIN row -->
            <div class="row">
                <!-- BEGIN col-6 -->
                <div class="col-xl-6">
                    <!-- BEGIN card -->
                    <div class="card mb-3">
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="flex-grow-1">
                                    <h5 class="mb-1">Bestseller</h5>
                                    <div class="fs-13px">Top 3 product sales this week</div>
                                </div>
                                <a href="#" class="text-decoration-none">See All</a>
                            </div>

                            <!-- product-1 -->
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center me-3 width-50 height-50">
                                    <img src="assets/img/product/product-1.jpg" alt=""
                                        class="ms-100 mh-100" />
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <div class="text-primary fs-10px font-weight-600">TOP SALES</div>
                                        <div class="text-dark font-weight-600">iPhone 11 Pro Max (256GB)</div>
                                        <div class="fs-13px">$1,099</div>
                                    </div>
                                </div>
                                <div class="ps-3 text-center">
                                    <div class="text-dark font-weight-600">382</div>
                                    <div class="fs-13px">sales</div>
                                </div>
                            </div>

                            <!-- product-2 -->
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center me-3 width-50 height-50">
                                    <img src="assets/img/product/product-2.jpg" alt=""
                                        class="ms-100 mh-100" />
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <div class="text-dark font-weight-600">Macbook Pro 13 inch (2021)</div>
                                        <div class="fs-13px">$1,120</div>
                                    </div>
                                </div>
                                <div class="ps-3 text-center">
                                    <div class="text-dark font-weight-600">102</div>
                                    <div class="fs-13px">sales</div>
                                </div>
                            </div>

                            <!-- product-3 -->
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center me-3 width-50 height-50">
                                    <img src="assets/img/product/product-3.jpg" alt=""
                                        class="ms-100 mh-100" />
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <div class="text-dark font-weight-600">Apple Watch Series 4(2021)</div>
                                        <div class="fs-13px">$349</div>
                                    </div>
                                </div>
                                <div class="ps-3 text-center">
                                    <div class="text-dark font-weight-600">75</div>
                                    <div class="fs-13px">sales</div>
                                </div>
                            </div>

                            <!-- product-4 -->
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center me-3 width-50 height-50">
                                    <img src="assets/img/product/product-4.jpg" alt=""
                                        class="ms-100 mh-100" />
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <div class="text-dark font-weight-600">12.9-inch iPad Pro (256GB)</div>
                                        <div class="fs-13px">$1,099</div>
                                    </div>
                                </div>
                                <div class="ps-3 text-center">
                                    <div class="text-dark font-weight-600">62</div>
                                    <div class="fs-13px">sales</div>
                                </div>
                            </div>

                            <!-- product-5 -->
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center me-3 width-50 height-50">
                                    <img src="assets/img/product/product-5.jpg" alt=""
                                        class="ms-100 mh-100" />
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <div class="text-dark font-weight-600">iPhone 11 (128gb)</div>
                                        <div class="fs-13px">$799</div>
                                    </div>
                                </div>
                                <div class="ps-3 text-center">
                                    <div class="text-dark font-weight-600">59</div>
                                    <div class="fs-13px">sales</div>
                                </div>
                            </div>
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->
                </div>
                <!-- END col-6 -->

                <!-- BEGIN col-6 -->
                <div class="col-xl-6">
                    <!-- BEGIN card -->
                    <div class="card">
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-grow-1">
                                    <h5 class="mb-1">Transaction</h5>
                                    <div class="fs-13px">Latest transaction history</div>
                                </div>
                                <a href="#" class="text-decoration-none">See All</a>
                            </div>

                            <!-- BEGIN table-responsive -->
                            <div class="table-responsive mb-n2">
                                <table class="table table-borderless mb-0">
                                    <thead>
                                        <tr class="text-dark">
                                            <th class="ps-0">No</th>
                                            <th>Order Details</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-end pe-0">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-0">1.</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="width-40 height-40">
                                                        <img src="assets/img/icon/paypal2.svg" alt=""
                                                            class="ms-100 mh-100" />
                                                    </div>
                                                    <div class="ms-3 flex-grow-1">
                                                        <div class="font-weight-600 text-dark">Macbook Pro 15 inch
                                                        </div>
                                                        <div class="fs-13px">5 minutes ago</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><span
                                                    class="badge bg-success-transparent-2 text-success"
                                                    style="min-width: 60px;">Success</span></td>
                                            <td class="text-end pe-0">$1,699.00</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-0">2.</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="width-40 height-40 rounded">
                                                        <img src="assets/img/icon/mastercard.svg" alt=""
                                                            class="ms-100 mh-100" />
                                                    </div>
                                                    <div class="ms-3 flex-grow-1">
                                                        <div class="font-weight-600 text-dark">Apple Watch 5 Series
                                                        </div>
                                                        <div class="fs-13px">5 minutes ago</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><span
                                                    class="badge bg-success-transparent-2 text-success"
                                                    style="min-width: 60px;">Success</span></td>
                                            <td class="text-end pe-0">$699.00</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-0">3.</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="width-40 height-40 rounded">
                                                        <img src="assets/img/icon/visa.svg" alt=""
                                                            class="ms-100 mh-100" />
                                                    </div>
                                                    <div class="ms-3 flex-grow-1">
                                                        <div class="font-weight-600 text-dark">iPhone 11 Pro Max</div>
                                                        <div class="fs-13px">12 minutes ago</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><span
                                                    class="badge bg-warning-transparent-2 text-warning"
                                                    style="min-width: 60px;">Pending</span></td>
                                            <td class="text-end pe-0">$1,299.00</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-0">4.</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="width-40 height-40 rounded">
                                                        <img src="assets/img/icon/paypal2.svg" alt=""
                                                            class="ms-100 mh-100" />
                                                    </div>
                                                    <div class="ms-3 flex-grow-1">
                                                        <div class="font-weight-600 text-dark">Apple Magic Keyboard
                                                        </div>
                                                        <div class="fs-13px">15 minutes ago</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><span
                                                    class="badge text-dark-transparent-5 bg-dark-transparent-1"
                                                    style="min-width: 60px;">Cancelled</span></td>
                                            <td class="text-end pe-0">$199.00</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-0">5.</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="width-40 height-40 rounded">
                                                        <img src="assets/img/icon/mastercard.svg" alt=""
                                                            class="ms-100 mh-100" />
                                                    </div>
                                                    <div class="ms-3 flex-grow-1">
                                                        <div class="font-weight-600 text-dark">iPad Pro 15 inch</div>
                                                        <div class="fs-13px">15 minutes ago</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><span
                                                    class="badge bg-success-transparent-2 text-success"
                                                    style="min-width: 60px;">Cancelled</span></td>
                                            <td class="text-end pe-0">$1,099.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END table-responsive -->
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->
                </div>
                <!-- END col-6 -->
            </div>
            <!-- END row -->
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
</body>

<!-- Mirrored from seantheme.com/studio/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 08:45:30 GMT -->

</html>
