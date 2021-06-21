<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        

    </head>
    <body>
        <div id="root"> 
            <h1>Homepage</h1>
            <div> - Under Construction - We apologise for the inconvenience!</div>
            <a href="{{ route('login') }}">Login</a>
        </div>


        <!-- SCRIPT 
            JS -->
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
