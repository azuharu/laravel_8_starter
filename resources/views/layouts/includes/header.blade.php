<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <header class="header header-sticky mb-4">
        <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                <svg class="icon icon-lg">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                </svg>
            </button><a class="header-brand d-md-none" href="#">
                <svg width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
                </svg></a>
            <ul class="header-nav d-none d-md-flex">
                <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
            </ul>
            <ul class="header-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list-rich') }}"></use>
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}"></use>
                        </svg></a></li>
            </ul>
            <ul class="header-nav ms-3">
                <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-md">
                            @if(Auth::user()->avatar === null)
                            <img class="avatar-img" src="{{ asset('assets/img/avatars/default.jpeg') }}" alt="user@email.com">
                            @else
                            <img class="avatar-img" src="{{ Storage::url(Auth::user()->avatar) }}" alt="{{ Auth::user()->email }}">
                            @endif
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pt-0">
                        <div class="dropdown-header bg-light py-2">
                            <div class="fw-semibold">Account</div>
                        </div><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                            </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}"></use>
                            </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-task') }}"></use>
                            </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-comment-square') }}"></use>
                            </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                        <div class="dropdown-header bg-light py-2">
                            <div class="fw-semibold">Settings</div>
                        </div><a class="dropdown-item" href="{{ route('profile.edit') }}">
                            <svg class="icon me-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                            </svg> Profile</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-settings') }}"></use>
                            </svg> Settings</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-credit-card') }}"></use>
                            </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-file') }}"></use>
                            </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                            </svg> Lock Account</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                            </svg><form action="{{ url('/logout') }}" method="POST" class="logout-button"> @csrf <button type="submit" class="btn btn-ghost-dark btn-block button-logout">Logout</button></form></a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-divider"></div>

        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-0 ms-2">
                    <li class="breadcrumb-item">
                        <!-- if breadcrumb is single--><span>Home</span>
                    </li>
                    <?php $segments = ''; ?>
                    @for($i = 1; $i <= count(Request::segments()); $i++)
                        <?php $segments .= '/'. Request::segment($i); ?>
                        @if($i < count(Request::segments()))
                            <li class="breadcrumb-item">{{ ucfirst(Request::segment($i)) }}</li>
                        @else
                            <li class="breadcrumb-item active">{{ ucfirst(Request::segment($i)) }}</li>
                        @endif
                    @endfor
                </ol>
            </nav>
        </div>
    </header>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            @include('layouts.includes.alert')

            @yield('content')
        </div>
    </div>
    <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2021 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/bootstrap/ui-components/">CoreUI UI Components</a></div>
    </footer>
</div>