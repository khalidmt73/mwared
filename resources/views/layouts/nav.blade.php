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