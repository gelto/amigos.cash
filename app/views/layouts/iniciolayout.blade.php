<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
    <title>Amigos Cash</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="">
    <link rel="shortcut icon" href="" />

    <link rel="stylesheet" href="{{Config::get('miconfig.publicvar')}}statics/foundation/css/foundation.css" />
    <script src="{{Config::get('miconfig.publicvar')}}statics/foundation/js/vendor/modernizr.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


  <body>
    @yield('content')
    <script src="{{Config::get('miconfig.publicvar')}}statics/foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>