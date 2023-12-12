<div class="vh-100 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sidebar" style="width: 280px;">
    <div class="logo text-center w-100">
        <img src="https://www.bracu.ac.bd/sites/all/themes/sloth/logo_white.svg" alt="" width="50" height="50" class="rounded-circle"> ADMIN
    </div>
    
    
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">

    @auth
        @if(auth()->user()->role == 'superadmin')
        <li class="nav-item">
            <a href="{{ route('super-admin/home') }}" class="nav-link text-white {{ Route::currentRouteName() === 'super-admin/home' ? 'active' : '' }} mb-2">
                <i class="ri-dashboard-fill"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('super-admin/addClub') }}" class="nav-link text-white {{ Route::currentRouteName() === 'super-admin/addClub' ? 'active' : '' }} mb-2">
                <i class="ri-add-box-fill"></i> <span>Add Club</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('super-admin/requests') }}" class="nav-link text-white {{ Route::currentRouteName() === 'super-admin/requests' ? 'active' : '' }} mb-2">
                <i class="ri-calendar-todo-fill"></i> <span>Requests</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('super-admin/settings') }}" class="nav-link text-white {{ Route::currentRouteName() === 'super-admin/settings' ? 'active' : '' }} mb-2">
                <i class="ri-settings-3-fill"></i> <span>Settings</span>
            </a>
        </li>
        @else
        <li class="nav-item">
            <a href="{{ route('admin/home') }}" class="nav-link text-white {{ Route::currentRouteName() === 'admin/home' ? 'active' : '' }} mb-2">
                <i class="ri-article-fill"></i> <span>Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin/members') }}" class="nav-link text-white {{ Route::currentRouteName() === 'admin/members' ? 'active' : '' }} mb-2">
                <i class="ri-user-2-fill"></i> <span>Members</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin/announcement') }}" class="nav-link text-white {{ Route::currentRouteName() === 'admin/announcement' ? 'active' : '' }} mb-2">
                <i class="ri-megaphone-fill"></i> <span>Announcement</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin/notification') }}" class="nav-link text-white {{ Route::currentRouteName() === 'admin/notification' ? 'active' : '' }} mb-2">
                <i class="ri-notification-badge-fill"></i> <span>Notification</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin/event') }}" class="nav-link text-white {{ Route::currentRouteName() === 'admin/event' ? 'active' : '' }} mb-2">
                <i class="ri-calendar-2-fill"></i> <span>Event</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin/settings') }}" class="nav-link text-white {{ Route::currentRouteName() === 'admin/settings' ? 'active' : '' }} mb-2">
                <i class="ri-settings-3-fill"></i> <span>Settings</span>
            </a>
        </li>

        @endif
    @endauth
        
        
    </ul>
    <hr>
    <div class="nav-item nav-pills">
        <a href="{{ route('logout') }}" class="nav-link text-white logout-btn"><i class="ri-logout-box-r-fill"></i> <span>Sign out</span> </a>
    </div>



    <div class="myalert" id="myalert">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
    </div>


    <script>
        var myAlertElement = document.getElementById("myalert");

        function hideMyAlert() {
            myAlertElement.style.display = "none";
        }

        setTimeout(hideMyAlert, 3000);
    </script>

</div>
