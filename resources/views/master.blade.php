<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   @include('include.style')
    <title>@yield('title')</title>
  </head>
  <body>
    @include('include.navbar')
      <div class="container">
        @yield('content')
      </div>
    @include('include.script')
  </body>
</html>
