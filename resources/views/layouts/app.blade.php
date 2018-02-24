<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <link rel="stylesheet" href="css/app.css">
  </head>

  <body>
    @include('inc.navbar');
    <div class="container">
      @if(Request::is('/'))
      @include('inc.showcase')
      @endif
      <div class="row">
        <div class="col-md-8 col-lg-8">
          @include('inc.messages')
        @yield('content')

      </div>
    
      </div>
    </div>
    <!--
      @section('sidebar') will be display on every page
      @show will only show content in @section('sidebar') in other pages and hide content from oiginal app.blade
    -->
      <script src="{{ asset('js/app.js') }}"></script>
    <footer id="footer" class="text-center">
      <p>Copy Rights Jakub Biesek 2018 &copy;</p>
    </footer>
  </body>
</html>
