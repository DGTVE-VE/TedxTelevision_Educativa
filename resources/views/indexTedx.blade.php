<!DOCTYPE html>
<html>
    <head>
        <title>TEDx</title>
        <meta charset="utf-8"/>
        <meta name="description" content="TEDx"/>
        <meta name="keywords" content="TEDx"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />


        <!-- Meta para Share Facebook -->
        <meta property="og:site_name" content="TEDx Televisi&oacute;n Educativa">
        <meta property="og:type" content="article"></meta>
        <meta property="og:image" content="http://www.tedxtelevisioneducativa.com/images/TEDxF.jpg"></meta>
        <meta property="og:description" content="Buscamos la innovación en materia de educaci&oacute;n, para ello reunimos a los mejores. Esto es TEDx Televisi&oacute;n Educativa, somos las #IdeasEnMovimiento."></meta>
        <meta property="og:url" content="http://www.tedxtelevisioneducativa.com"></meta>
        <meta property="og:title" content="TEDx Televisi&oacute;n Educativa"></meta>


        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@TEDxTvEducativa">
        <meta name="twitter:title" content="TEDx Televisi&oacute;n Educativa">
        <meta name="twitter:description" content="Buscamos la innovación en materia de educaci&oacute;n, para ello reunimos a los mejores. Esto es TEDx Televisi&oacute;n Educativa, somos las #IdeasEnMovimiento.">
        <meta name="twitter:creator" content="@TEDxTvEducativa">
        <!-- Resumen Twitter Card con una imagen grande con al menos 280x150px -->
        <meta name="twitter:image:src" content="http://www.tedxtelevisioneducativa.com/images/TEDxF.jpg">


        <!-- Marcado Schema.org para Google+ -->
        <meta itemprop="name" content="TEDx Televisi&oacute;n Educativa">
        <meta itemprop="description" content="Buscamos la innovación en materia de educaci&oacute;n, para ello reunimos a los mejores. Esto es TEDx Televisi&oacute;n Educativa, somos las #IdeasEnMovimiento.">
        <meta itemprop="image" content="http://www.tedxtelevisioneducativa.com/images/TEDxF.jpg">



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