

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>




    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/style.css') }}">

    <link rel="stylesheet" href="{{ URL::to('resources/css/mysitestyle.css') }}">
    <link href="{{ asset('resources/css/mysitestyle.css') }}" rel="stylesheet"  >
    <link rel="stylesheet" href="resources/css/mysitestyle.css" />
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css" />



    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>





<div>
    @yield('header')
</div>










<div class="container page">
    @yield('content')
</div>

@yield('footer')

@yield('scripts')
</body>
</html>
