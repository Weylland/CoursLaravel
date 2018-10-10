<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" rel="stylesheet" type="text/css">
        <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
        
    </head>
    <body class="container">
        <div class="section">
            @yield('contenu')
        </div>
    </body>
</html>
