<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
            {{-- <h1><a class="navbar-brand mr-lg-5" href="{{ url('/') }}">
                    Travel
                </a></h1> --}}
            {{-- <!- if logo is image enable this --}}
            <a class="navbar-brand mr-lg-5" href="{{ route('front.home') }}">
                <img src="{{ asset('front-assets/images/Logo.png') }}" alt="Your logo" title="Your logo"
                    style="height: 70px; width: auto; max-width: 250px;" />
            </a>
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item @yield('home-active')">
                        <a class="nav-link" href="{{ route('front.home') }}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item @yield('about-active')">
                        <a class="nav-link" href="{{ route('front.about') }}">About</a>
                    </li>
                    <li class="nav-item @yield('destination-active')">
                        <a class="nav-link" href="{{ route('front.destination') }}">Destinations</a>
                    </li>

                    <li class="nav-item @yield('contact-active')">
                        <a class="nav-link" href="{{ route('front.contact') }}">Contact</a>
                    </li>
                    @if (!Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.login') }}">Admin</a>
                        </li>
                    @endif
                </ul>
            </div>

            @if (!Auth::check())
                <div class="d-lg-block d-none">
                    <a href="{{ route('login') }}" class="btn btn-style btn-secondary">Login</a>
                </div>
            @endif
            @if (Auth::check())
                <li style="background-color: #FF1654 ;     border-radius: 3px; " class="nav-item submenu dropdown">
                    <a style="color: white ;" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li class="d-lg-block">
                            <a href="{{ route('front.reservation.index') }}" class="nav-link"
                                style="width:100%; border-style: none; text-align: left; background-color: white; color: #FF1654; display: block; text-decoration: none; padding: 8px 16px;">
                                My Reservation
                            </a>
                        </li>

                        <li class="d-lg-block d-none">
                            <form action="{{ route('logout') }}" method="post" id="logout_form">
                                @csrf
                                <button class="nav-link"
                                    style="width:100%;border-style: hidden;text-align: left;background-color:white;color:#FF1654"
                                    type="submit">Logout</button>
                                {{-- <a class="nav-link"
                            href="javascript:$('form#logout_form').submit();">Logout</a> --}}

                            </form>
                        </li>
                    </ul>
                </li>
            @endif

            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <div>
                <p>Subscribers: {{ $subscriberCount }}</p>
            </div>

            {{-- <p>{{Auth::user()->name}}</p> --}}




            <!-- toggle switch for light and dark theme -->
            {{-- <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div> --}}
            <!-- //toggle switch for light and dark theme -->
        </nav>

    </div>
</header>
