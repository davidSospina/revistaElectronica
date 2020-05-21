<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap con helper asset -->
    <link rel="stylesheet" href="{{asset("css/app.css")}}">

    <title>@yield('title', 'Revista electrónica')</title>
</head>
<body>
    @include("dashboard.partials.nav-header-main")
    <div class="container">
        @include("dashboard.partials.session-status")
        @yield('content')
    </div>
</body>
<script src="{{asset("js/app.js")}}"></script>

</html>