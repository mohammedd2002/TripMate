    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">

                    <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{ asset('front-assets/images/Logo.png') }}" alt="Your logo" title="Your logo" style="height: 120px; width: 110%;">
                        </span>
                    </a>

                </div>

                <div class="menu-inner-shadow"></div>
                
                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item @yield('dashboard-active')">
                        <a href="{{route('admin.dashboard')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Pages</span>
                    </li>
                    <li class="menu-item @yield('destinations-active') ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Destinations</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('admin.destination.index') }}" class="menu-link">
                                    <div data-i18n="Account">Show</div>
                                </a>
                                <a href="{{ route('admin.destination.create') }}" class="menu-link">
                                    <div data-i18n="Account">Create</div>
                                </a>

                        </ul>
                    </li>

                    <li class="menu-item @yield('guides-active') ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Guides</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('admin.guide.index') }}" class="menu-link">
                                    <div data-i18n="Account">Show</div>
                                </a>
                                <a href="{{ route('admin.guide.create') }}" class="menu-link">
                                    <div data-i18n="Account">Create</div>
                                </a>

                        </ul>
                    </li>

                    <li class="menu-item @yield('contacts-active') ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Contacts</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('admin.contact.table') }}" class="menu-link">
                                    <div data-i18n="Account">Show</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item @yield('about-active') ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">About Sec</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('admin.about.index') }}" class="menu-link">
                                    <div data-i18n="Account">Show</div>
                                </a>
                          

                        </ul>
                    </li>

                    <li class="menu-item @yield('usersReservations-active') ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Users Reservations</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('admin.userresrvations.table') }}" class="menu-link">
                                    <div data-i18n="Account">Show</div>
                                </a>
                        </ul>
                    </li>
            </aside>
            <!-- / Menu -->
