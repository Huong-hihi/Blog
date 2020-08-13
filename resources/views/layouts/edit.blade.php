<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>@yield('head.title')</title>
    <style>#footer {
        margin-top: 50px;
        border-top: solid 2px #aaaaaf;
        padding-top: 35px;
        padding-bottom: 35px;
        text-align: center;
    }
</style>
@yield('head.css')
</head>
<body>
    <div class="container full" style="margin-bottom: 0;">
    @include('partials.header')
    @include('partials.navbar')
    @yield('body.content')
    </div>
    @include('partials.footer')
    @yield('body.js')
</body>
</html>