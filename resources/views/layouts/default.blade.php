<!DOCTYPE html>
<html>
<head>
  <title>@yield('title','Sample App')</title>
  <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
  @include('layouts._header')
<div class="container">
  <div class="cpl-md-offset-1 col-md-10">
    @yield('content')
    @include('layouts._footer')
  </div>

</div>



</body>
</html>