<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.inc.head')
    <link rel="stylesheet" href="{{asset('assets/css/admin-profile.css')}}">
</head>

<body>

    <div id="app">
        @include('admin.layouts.sidebar')

        @yield('profile-content')
    </div>


    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>

</body>
</html>
