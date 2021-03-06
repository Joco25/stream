<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My App</title>

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.css">

        <link rel="stylesheet" href="/css/app.css">
        
    </head>
    <body>
        <div id="app">
            @include('layouts.header')
            <div class="section">
                <div class="container">
                  <router-view></router-view>  
                </div>
            </div>
        </div>
    <script src="/js/app.js"></script>
    </body>
</html>
