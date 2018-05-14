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
    @include('shared.messages')
    @yield('content')
    @include('layouts._footer')
  </div>

</div>

<script src="/js/app.js"></script>



</body>
</html>