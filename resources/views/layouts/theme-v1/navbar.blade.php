<div class="navbar-wrapper">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item">
                @if (Auth::user()->is_admin == 1)
                    <a class="navbar-brand" href="{{ route('admin.route') }}">
                @else
                    <a class="navbar-brand" href="{{ route('home') }}">
                @endif

                    <img class="brand-logo" alt="smwcrv logo" src="{{ asset('img/logo/smwcrvd_web_logo_73x73.png') }}">
                    <h3 class="brand-text">smwcrv</h3>
                </a>
            </li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
        </ul>
    </div>
    <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
                <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav float-right">
                <li class="dropdown dropdown-user nav-item">
                    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                        <span class="avatar avatar-online">
                            <img src="{{ asset('theme-v1/app-assets/images/portrait/small/avatar-s-1.png') }}" alt="avatar"><i></i>
                        </span>
                        <span class="user-name">John Doe</span>
                    </a>
                <div class="dropdown-menu dropdown-menu-right">
                    {{-- Dropdown Menu --}}
                    <a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                    <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                    <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                    <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div>
                    {{-- Logout --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ft-power"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
                </div>
                </li>
            </ul>
        </div>
    </div>
</div>

