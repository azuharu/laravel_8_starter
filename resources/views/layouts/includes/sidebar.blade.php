<div class="sidebar sidebar-dark sidebar-fixed sidebar-self-hiding-xl" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>


    <?php

    $route = request()->route()->getName();

    ?>

    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-title">SETTING</li>
        <li class="nav-item"><a class="nav-link <?= (strpos($route, 'user') !== false ) ? 'active' : '' ?>" href="{{ route('user.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                </svg> User</a></li>
        <li class="nav-item"><a class="nav-link" href="typography.html">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-pencil') }}"></use>
                </svg> Typography</a></li>
        <li class="nav-divider"></li>
        <li class="nav-title">Extras</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-star') }}"></use>
                </svg> Pages</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                        </svg> Login</a></li>
                <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                        </svg> Register</a></li>
                <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bug') }}"></use>
                        </svg> Error 404</a></li>
                <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bug') }}"></use>
                        </svg> Error 500</a></li>
            </ul>
        </li>
        <li class="nav-item mt-auto"><a class="nav-link" href="docs.html">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-description') }}"></use>
                </svg> Docs</a></li>
        <li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-layers') }}"></use>
                </svg> Try CoreUI
                <div class="fw-semibold">PRO</div>
            </a></li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>