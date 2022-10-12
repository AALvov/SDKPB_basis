<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> СДКПБ</title>

    <meta property="og:title" content="" />
    <meta property="og:image" content="assets/preview.jpg" />
    <meta property="og:description" content=""/>

    <!-- Scripts -->

    <script src="{{asset('tooltip/tooltip.js')}}"></script>
    <link href="{{asset('tooltip/tooltip.css')}}" rel="stylesheet">
    <script src="{{asset('modal-windows/modal_windows.js')}}"></script>
    <link href="{{ asset('modal-windows/modal_windows.css') }}" rel="stylesheet">




    <script src="{{asset('/js/jquery.min.js')}}"></script>
@stack('am4-script-lib')
@stack('highcharts-script-lib')
@stack('datapicker')
@stack('calendar_scripts')
{{--    @stack('XMLSign')--}}

<!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}">
    <link href="{{ asset('assets/favicon/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">

    @stack('table_fix')
    @stack('app-css')


</head>
<body>




<div class="header">
    <div class="header_inside">
        <script src="{{asset('tooltip/tooltip.js')}}"></script>
        <link href="{{asset('tooltip/tooltip.css')}}" rel="stylesheet">

        <div class="time_block">
            <p id="time"></p>
        </div>
    </div>

    <script>
        function updateTime() {
            var now = new Date()
            now.setHours(now.getHours() + 3)
            document.getElementById('time').textContent = now.toISOString().split('T')[0] + ' ' + now.toISOString().split('T')[1].split('.')[0];
        }
        setInterval(updateTime, 1000);

    </script>

</div>

<div class="content">



    @yield('content')



</div>




@stack('scripts')

</body>





{{--<script type="text/javascript" src="{{asset('/js/jquery.min.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('/js/top_table.js')}}"></script>
</html>