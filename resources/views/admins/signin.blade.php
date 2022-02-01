<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ホームページ">
    <link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ secure_asset('/css/admin.css') }}">
    <title>SIGNIN</title>
</head>
<body class="signin text-center">
    <div class="container-fluid">
        <div class="form-signin">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="error-message">
                {{ $error }}
            </div>
            @endforeach
            @endif
            <form action="/signin" method="post">
                @csrf
                <h1>管理者ページ</h1>
                <input type="password" class="form-control" name="password" placeholder="パスワード" required autofocus>
                <button class="btn btn-sm" type="submit">ログイン</button>
            </form>
        </div>
    </div>
</body>
</html>