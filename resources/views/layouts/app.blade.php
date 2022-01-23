<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ホームページ">
    <link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <script src="{{ mix('js/home.js') }}"></script>
    @yield('js')
    <title>@yield('title')</title>
</head>
@section('body_name')
<body class="app">
@show
    <div class="container-fluid">
        <div class="home row">
            <div class="header">
                <p class="btn-nav">
                    <span></span>
                    <span></span>
                    <span></span>
                </p>
                <nav class="gnav-box">
                    <ul class="gnav nav">
                        <li class="nav-item"><a href="/news" class="nav-link">NEWS</a></li>
                        <li class="nav-item"><a href="/profile" class="nav-link">PROFILE</a></l▾i>
                        <li class="nav-item"><a href="/schedule" class="nav-link">SCHEDULE</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">OFFICIAL</a></li>
                        <li class="nav-item"><a href="/guideline" class="nav-link">GUIDELINE</a></li>
                    </ul>
                </nav>
                <a href="/home/next" class="nav-link"><img src="{{ asset('/img/home_favicon.jpg') }}" alt="ホームアイコン"></a>
            </div>
            @section('movie')
            <div class="main">
                <video src="{{ asset('/img/Particles.mp4') }}" autoplay muted playsinline loop></video>
            </div>
            @show
        </div>
        <div class="size">
            @yield('body')
        </div>
        <div class="footer">
            <p>&copy; Name All rights reserved</p>
            <div class="nav-box">
                <ul class="nav">
                    <li class="nav-item"><a href="/news" class="nav-link">NEWS</a></li>
                    <li class="nav-item"><a href="/profile" class="nav-link">PROFILE</a></li>
                    <li class="nav-item"><a href="/schedule" class="nav-link">SCHEDULE</a></li>
                    <li class="nav-item"><a href="/guideline" class="nav-link">GUIDELINE</a></li>
                </ul>
                <ul class="nav icon-zone">
                    <li class="nav-item"><a href="#" class="icon nav-link"><img src="{{ asset('/img/youtube.svg') }}" alt="YouTubeのアイコン"></a></li>
                    <li class="nav-item"><a href="#" class="icon nav-link"><img src="{{ asset('/img/twitter.svg') }}" alt="Twitterのアイコン"></a></li>
                    <li class="nav-item"><a href="#" class="icon nav-link"><img src="{{ asset('/img/instagram.svg') }}" alt="Instagramのアイコン"></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>