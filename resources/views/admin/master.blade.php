<!DOCTYPE html>
<html dir="ltr" lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, Ample lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Ample admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Trang quản lý bán hàng</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('plugins/images/favicon.png')}}">
    <link href="{{asset('plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="{{route('dashboard')}}">
                        <b class="logo-icon">
                            <img src="{{asset('plugins/images/logo-icon.png')}}" alt="homepage" />
                        </b>
                        <span class="logo-text">
                            <img src="{{asset('plugins/images/logo-text.png')}}" alt="homepage" />
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto d-flex align-items-center">

                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block mr-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="{{asset('images/avatar/'.$user['name'].'/avatar.jpg')}}" alt="user-img" width="36" class="img-circle">
                                <span class="text-white font-medium">{{$user['name']}}</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('dashboard')}}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Thống kê</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('profile')}}"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Thông tin cá nhân</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('account')}}"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Quản lý tài khoản</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('storage')}}"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Quản lý kho</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('category')}}"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Quản lý loại sản phẩm</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('supplier')}}"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Quản lý nhà cung cấp</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('bill')}}"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Quản lý đơn hàng</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('logout')}}"
                                aria-expanded="false">
                                <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Đăng xuất</span>
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
        </aside>


        @yield('content')

    </div>
    <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/app-style-switcher.js')}}"></script>
    <script src="{{asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/waves.js')}}"></script>
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('js/pages/dashboards/dashboard1.js')}}"></script>
</body>

</html>
