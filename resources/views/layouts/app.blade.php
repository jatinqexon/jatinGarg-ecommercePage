<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{ asset('css/custom.css')}}" rel="stylesheet" />
        <title>demoProject</title>
        <script>
            var csrf = '{{ csrf_token() }}';   
        </script>
    </head>
    <body>
        <div class='container'>
            @if(session()->get('success'))
                <div class='alert alert-success'>
                    {{session()->get('success')}}
                </div> <br/>
            @endif
        </div>
        @yield('content')
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
    