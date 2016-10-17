<!DOCTYPE html>
<html>
    <head>
        <title>TEDx</title>
        <meta charset="utf-8"/>
        <meta name="description" content="TEDx"/>
        <meta name="keywords" content="TEDx"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

        <!--Fonts-->

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!---->        
        <link rel="stylesheet" href="{{asset ('css/estilo.css') }}">
        <link rel="stylesheet" href="{{asset ('css/estilo-serch.css') }}">
        <script src="{{asset ('js/jsSerch.js') }}"></script>
		<script src="js/videos.js"></script>
    </head>
    <body>
        <header>
            @yield('headerTedx')
        </header>
        <div class="container-fluid cuerpoPagina">
            @yield('bodyTedx')
        </div>
        <footer>
            @yield('footerTedx')
        </footer>
    </body>
</html>
