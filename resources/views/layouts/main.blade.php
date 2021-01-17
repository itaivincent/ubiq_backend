<!DOCTYPE html>
<html lang="en">
 <head>
   @include('layouts.partials.head')
 </head>
 <body>
 
 <div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
@include('layouts.partials.nav')
@include('layouts.partials.sidebar')

@yield('content')
@include('sweetalert::alert')
@include('layouts.partials.footerscripts')
</div>
</div>
</div>

 </body>
</html>