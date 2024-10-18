<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default">
@include ('admindashboard.partials.head')

<body>
    @include('admindashboard.partials.sidebar')
    


    <div class="layout-page">
        <!-- Navbar -->
        @include('admindashboard.partials.header')
        <!-- / Navbar -->
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <d class="row">
                  @yield('content')
            </div>
        </div>
        <!-- / Content -->
        @include('admindashboard.partials.footer')
</body>

</html>
