<!doctype html>
<html dir="rtl" lang="ar" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="{{ asset('/image/title-img.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>موارد</title>
    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>



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

    <nav class="navbar navbar-expand-lg navbar-light bg-light text-right  border">
        <a class="navbar-brand pr-3" href="#">
            <img class="" src="{{ asset('image/logo.jpg') }}" height="60px" width="40px" />
            <span class="mr-3">الموارد البشرية</span>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
            @if (Auth::user())

            <ul class="navbar-nav ">
                <li class="nav-item dropdown p-1">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog fa-md"></i> تهيئة البيانات</a>
                    <div class="dropdown-menu text-right">
                        <a class="dropdown-item" href="{{route('employee.index')}}">الموظف</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('employer.index')}}">الجهات</a>
                        <a class="dropdown-item" href="{{route('jobTitle.index')}}">الوظائف</a>
                        <a class="dropdown-item" href="{{route('employerOther.index')}}">جهات التكليف</a>
                    </div>
                </li>
                <li class="nav-item dropdown p-1">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-file-alt fa-md"></i> القرارات</a>
                    <div class="dropdown-menu text-right">
                        <a class="dropdown-item" href="{{route('secondment.index')}}">الاعارة</a>
                        <a class="dropdown-item" href="{{route('decision.index')}}">التكليف</a>
                        <a class="dropdown-item" href="{{route('decision.index')}}">الاجازات</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item profile">
                    <a class="nav-link" href="#">
                        <img src="{{ asset('/image/admin.jpg')}}" alt="" />
                        <span class="caret">{{ Auth::user()->name }}</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        {{ __('خروج') }}
                        <i class="fas fa-sign-out-alt text-danger fa-lg"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
            @endif
        </div>

    </nav>


    <div class="container-fluid text-right w-75 content">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-11">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>