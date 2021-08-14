<!DOCTYPE html>
<html lang="en">
   @include('user.inc.header')
<body>
    @yield('content')

    <!-- Core -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('jquery-ui/jquery-ui.min.js')}}"></script>
    <script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
    </script>
    @yield('bodyExtra')
</body>
</html>
