<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ecommerce</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('Dashboard') }}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{ asset('Dashboard') }}/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Dashboard') }}/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{ asset('Dashboard') }}/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>

      
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ asset('Dashboard') }}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('Dashboard') }}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
