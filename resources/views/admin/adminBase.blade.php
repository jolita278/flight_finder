<!doctype html>
<html lang="{{ config('app.locale') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    @include('admin.adminCSS')

</head>
<body>

{{--<aside>--}}
    {{--@include('admin.adminSideBar')--}}
{{--</aside>--}}
<main>
    @yield('adminList')
    @yield('adminFormAirports')
    @yield('adminFormAirlines')
    @yield('adminFormFlights')

</main>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

@yield('scripts')

</html>
