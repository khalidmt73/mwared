<!doctype html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="{{ asset('/image/title-img.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>موارد</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/extra.css') }}" rel="stylesheet">

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="container-fluid">
                <div class="row">
                    <!-- top-nav -->
                    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto fixed-top py-2 top-navbar">
                        <div class="row align-items-center">

                            <div class="col-md-2">
                                <h5 class="">لوحة التحكم</h5>
                            </div>

                            <div class="col-md-7" style="background-color:red">
                                jj
                            </div>

                            <div class="col-md-3">
                                <ul class="navbar-nav">
                                    <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-bell text-muted fa-lg"></i></a></li>
                                    <li class="nav-item icon-parent"> <img src="{{ asset('image/admin.jpg') }}" height="40px" width="40px" class="rounded-circle mr-5" />
                                        <a href="#" class="">خالد المطيري</a></li>
                                    <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                                </ul>
                            </div>

                        </div> <!-- end of row -->
                    </div> <!-- end of col -->
                    <!-- end of top-nav -->
                </div><!-- end of row top-nave-->
                <div class="row">
                    <!-- sidebar -->
                    <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top text-right">
                        <a href="#" class="navbar-brand text-white d-block mx-auto 
                         py-4 mb-2  text-center"> عمادة الموارد البشرية</a>
                        <ul class="navbar-nav flex-column text-right">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white  p-3 mb-2  current">
                                    <i class="fas fa-home text-light fa-md mr-3 pl-2"></i>
                                    لوحة التحكم</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link  text-white p-3 mb-2 sidebar-link">
                                    <i class="fas fa-cog text-light fa-md mr-3 pl-2"></i>
                                    الاعدادات</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                    <i class="fas fa-exchange-alt text-light fa-md mr-3 pl-2"></i>
                                    النقل والتكليف</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                    <i class="fas fa-plane-departure text-light fa-md mr-3 pl-2"></i>
                                    الإجازات</a>
                            </li>

                        </ul>
                    </div>
                    <!-- end sidebar -->
                </div> <!-- end of row sidebar-->
            </div> <!-- end of container -->
        </div> <!-- end of collapse -->
    </nav>
    <!-- end of navbar -->


</body>

</html>