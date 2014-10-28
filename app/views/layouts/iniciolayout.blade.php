<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amigos.Cash</title>
    <link rel="stylesheet" href="{{Config::get('miconfig.publicvar')}}statics/foundation/css/foundation.css" />
    <script src="{{Config::get('miconfig.publicvar')}}statics/foundation/js/vendor/modernizr.js"></script>
  </head>

  <body>
    @yield('content')
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{Config::get('miconfig.publicvar')}}statics/foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>