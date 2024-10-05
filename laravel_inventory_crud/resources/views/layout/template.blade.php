<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Invent-Ku</title>
    <link href="{{ asset('style/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('font-awesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css') }}">
</head>

<body class="sb-nav-fixed">

    @include('partials._navbar')

    <div id="layoutSidenav">

        @include('partials._sidebar')

        <div id="layoutSidenav_content">

            @yield('content')

        </div>
    </div>

    @include('partials._footer')

</body>

</html>
