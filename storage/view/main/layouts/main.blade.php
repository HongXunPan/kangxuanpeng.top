<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->

    <link rel="icon" href="/resources/icon/www.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/resources/icon/www.ico" type="image/x-icon"/>


    <link rel="stylesheet" href="/resources/css/main/base.css"/>
    <link rel="stylesheet" href="/resources/css/main/index.css"/>

</head>
<body>
<canvas width="3000" height="872"></canvas>
@yield('content')

@yield('footer')

</body>

<script src="/resources/js/main/index-canvas.js"></script>
</html>
