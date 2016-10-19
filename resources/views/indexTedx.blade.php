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
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85993742-1', 'auto');
  ga('send', 'pageview');

</script>