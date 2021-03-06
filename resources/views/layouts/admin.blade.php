<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ホームページ">
    <link rel="shortcut icon" href="{{ secure_asset('/img/favicon.ico') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ secure_asset('/css/admin.css') }}">
    <title>@yield('title')</title>
</head>
<body class="admin">
    <div class="container-fluid">
        <div class="home row">
            <div class="header">
                <ul class="nav">
                    <li class="nav-item"><a href="/admin" class="nav-link">HOME</a></li>
                    <li class="nav-item"><a href="/admin/news" class="nav-link">NEWS</a></li>
                    <li class="nav-item"><a href="/admin/profile" class="nav-link">PROFILE</a></li>
                    <li class="nav-item"><a href="/admin/schedule" class="nav-link">SCHEDULE</a></li>
                    <li class="nav-item"><a href="/admin/guideline" class="nav-link">GUIDELINE</a></li>
                </ul>
            </div>
            <div class="main">
                <img src="{{ secure_asset('/img/admin.jpg') }}" alt="ホーム画面">
            </div>
        </div>
        <div class="size">
            @yield('body')
        </div>
        <div class="footer">
            <p>&copy; Name All rights reserved</p>
        </div>
    </div>
</body>
</html>