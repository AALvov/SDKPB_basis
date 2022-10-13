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











<!-- Styles -->


</head>
<body>




<div class="header">
    <div class="header_inside">


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





</html>
