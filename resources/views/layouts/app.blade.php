<!DOCTYPE html>
<html>
<head>
  <mate charset="utf-8"></mate>
  <mate http-equiv="X-UA-Compatible" content="IE=edge"></mate>
  <mate name="viewport" content="width=device-width, initial-scale=1"></mate>

  <!-- CSRF Token -->
  <mate name="csrf-token" content="{{ csrf_token() }}"><
  <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>
  <div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')

    <div class="container">

      @include('shared._messages')

      @yield('content')

    </div>

    @include('layouts._footer')
  </div>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
