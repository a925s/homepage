<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ホームページ">
    <link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>SIGNIN</title>
</head>
<body class="signin text-center">
    <div class="container-fluid">
        <div class="form-signin">
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