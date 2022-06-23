<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Tailwind -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>{{env('APP_NAME')}}</title>


    </head>

    <body class="bg-gray-800 ">
    <div class="container" id="app">
            <welcome/>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
