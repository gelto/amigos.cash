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
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="/">Amigos Cash - La red social del préstamos entre amigos | </a></h1>
        </li>
         <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>
      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="/">Cuentas</a></li>
          <li><a href="/amigos">Amigos</a></li>
          <li><a href="/micuenta">Mi cuenta</a></li>
          <li><a href="http://bit.ly/1vf1nfV">Gana $100 con piggo.mx</a></li>
          <li class="active"><a href="/logout">Logut</a></li>
        </ul>
      </section>
    </nav>

    <br>
    @yield('content')
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{Config::get('miconfig.publicvar')}}statics/foundation/js/foundation.min.js"></script>
    <script src="{{Config::get('miconfig.publicvar')}}statics/js/general.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>