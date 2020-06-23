<!doctype html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>موارد</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/extra.css') }}" rel="stylesheet">

</head>
<body>
    <!-- navbar -->
    <nav class="nav navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler ml-auto-mb-2 bg-light" type="button"
            data-toggle="collapse"
            data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
        </button>

         <div class="collapse navbar-collapse" id="myNavbar">

            <div class="container-fluid">
               <div class="row">
                    <!-- sidebar -->
                    <div class="col-lg-3 sidebar fixed-top text-right">
                        <a href="#" class="navbar-brand text-white d-block
                         mx-auto text-center py-3 mb-4
                         bottom-border"> الموارد </a>
                    <div class=" bottom-border pb-3">
                        <img src="{{ asset('image/admin.jpg') }}"
                        height="40px" width="40px"
                        class="rounded-circle mr-3"/>
                        <a href="#" class="text-white">خالد المطيري</a>
                    </div>
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white p-3 mb-2 current">
                            <i class="fas fa-home text-light fa-lg mr-3"></i>
                            لوحة التحكم</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white p-3 mb-2">
                            <i class="fas fa-cog text-light fa-lg mr-3"></i>
                            الاعدادات</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white p-3 mb-2">
                            <i class="fas fa-exchange-alt text-light fa-lg mr-3"></i>
                           النقل والتكليف</a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white p-3 mb-2">
                            <i class="fas fa-plane-departure text-light fa-lg mr-3"></i>
                           الإجازات</a>
                        </li>

                    </ul>
                </div>
                    <!-- end sidebar -->

                     <!-- top-nav -->
                     <div class="col-lg-9 ">
                     </div>
                        <!-- end top-nav -->
               </>
            </div>
     </div>
         </div>
    </nav>
    <!-- end navbar -->




</body>

</html>
