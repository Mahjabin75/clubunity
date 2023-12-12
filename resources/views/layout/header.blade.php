<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-clr">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="logo" src="{{ asset('assets/images/logo.png') }}"
                    alt="LOGO"></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-between" id="navbarCollapse" style="">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('announcement') }}">Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clublist') }}">Club list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                    </li>
                </ul>
                <form class="row justify-content-around mt-2 mt-md-0" action="{{ route('searchClubs') }}" method="GET">
                    <input class="col-9 form-control mr-1" type="text" placeholder="Search" aria-label="Search" name="query">
                    <button type="submit" class="col-2 btn bg-white"><i class="ri-search-line"></i></button>
                </form>

                @auth
                @if(auth()->user()->role == 'user')
                <div class="dropdown float-end ml-md-4 mt-2 mt-md-0 text-right">
                    <a href="javascript:void(0)" class="d-block text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/images/user.png') }}" alt="mdo" width="35" height="35"
                            class="rounded-circle"> {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="{{ route('joined-clubs') }}"><i
                                    class="ri-government-line"></i> Joined Clubs</a></li>
                        <li><a class="dropdown-item {{auth()->user()->notification}}" href="{{ route('notification') }}"><i class="ri-notification-2-line"></i> Notifications</a></li>
                        <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="ri-user-settings-line"></i>Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"><i class="ri-logout-box-r-line"></i> Sign out</a></li>
                    </ul>
                </div>
                @else
                <div class="float-end ml-md-4 mt-2 mt-md-0 text-right">
                    <a href="{{ route('login') }}"><button class="btn btn-primary">Login</button></a>
                </div>
                @endif
                @else
                <div class="float-end ml-md-4 mt-2 mt-md-0 text-right">
                    <a href="{{ route('login') }}"><button class="btn btn-primary">Login</button></a>
                </div>
                @endauth
            </div>
        </div>
    </nav>
</header>