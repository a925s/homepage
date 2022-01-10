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
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid">
        <div class="home row">
            <div class="header">
                <ul class="nav">
                    <li class="nav-item"><a href="#" class="nav-link">NEWS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">PROFILE</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">SCHEDULE</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">OFFICIAL</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">GUIDELINE</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><img src="{{ asset('/img/home_favicon.jpg') }}" alt="ホームアイコン"></a></li>
                </ul>
            </div>
            <div class="main">
                @section('movie')
                <video src="{{ asset('/img/Particles.mp4') }}" autoplay muted playsinline loop></video>
                @show
            </div>
        </div>
        @yield('body')
        <div class="footer">
            <p>&copy; Name All rights reserved</p>
            <div class="nav-box">
                <ul class="nav">
                    <li class="nav-item"><a href="#" class="nav-link">NEWS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">PROFILE</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">SCHEDULE</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">GUIDELINE</a></li>
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