<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('css-custom')
    <script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
    <script src="https://www.youtube.com/player_api"></script>
    <link rel="stylesheet preload" as="style" href="{{asset('course/css/preload.min.css')}}" />
    <link rel="stylesheet preload" as="style" href="{{asset('course/css/libs.min.css')}}" />
</head>
<body>
   @include('layouts.courses.header')
    @yield('content')
    @include('layouts.courses.footer')
</body>
 @yield('js-custom')
 <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</html>