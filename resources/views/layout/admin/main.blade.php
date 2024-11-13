<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Laptop Shop</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-4.3.1.min.css') }}">
    <style>
        h4,h5 {
            color: #CF8507;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12">
                @include('layout.admin.header')
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                @include('layout.admin.left')
            </div>

            <div class="col-sm-9">
                @yield('content')
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                @include('layout.admin.footer')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
