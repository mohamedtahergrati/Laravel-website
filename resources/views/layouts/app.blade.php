<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Grati</title>
</head>
<body>
    @include('inc.navbar')
    
    <div class="container">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
        <div class="row">
            <div class="col-md8 col-lg-8">
                @include('inc.messages')
                @yield('content')
            </div>
            <div class="col-md4 col-lg-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>
    <footer  id="footer" class="text-center">
        <p>Copyright 2019 &copy; Grati</p>
    </footer>
    <style>
        #footer{
                margin-top: 30px;
                padding: 20px;
                color: #fff;
                background: #333;
                }
    </style>   
</body>
</html>