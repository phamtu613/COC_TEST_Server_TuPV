<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="keywords" content="test tupv" />
    <meta name="description" content='Test Tu PV' />
    <meta name="news_keywords" content="bai test tupv">
    <meta property="og:title" content="bai test tupv" />
    <meta property="og:description" content="bai test tupv" />
    <meta property="og:image" content="/public/client/img/image-web.jpg" />
    <meta property="og:url" itemprop="url" content="/">
    <meta itemprop="name" content="tupv" />
    <meta itemprop="description" content="Test Tu PV" />
    <meta itemprop="image" content="/public/client/img/image-web.jpg" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- css -->
    @yield('css')

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('client/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/fonts/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/fonts/fontawesome-webfont.woff') }}">
</head>

<body>
    <div class="wrapper">

        <!-- content -->
        <div class="wp-content">
            @yield('content')
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('client/js/main.js') }}"></script>
    @yield('custom-scripts')

</body>

</html>
