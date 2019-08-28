<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Renaku') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:200,400,600,800" rel="stylesheet"> -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-sans text-gray-700" style="background-color:#EFF2F4">
        <div class="container mx-auto mt-24">
            Welcome
        </div>
    </body>
    <script src="{{ mix('/js/app.js') }}" defer></script>
</html>
