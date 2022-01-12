@extends('layouts.admin')

@section('title', 'USER')

@section('body')
<div class="form-user">
    <div class="profile-main">
        <form action="/admin/profile/user" method="post" enctype="multipart/form-data">
            @csrf
            <label for="user-photo">ユーザー画像</label>
            <input type="file" class="form-control" id="user-photo">

            <label for="user-name">ユーザーネーム</label>
            <input type="text" class="form-control" name="user-name" id="user-name" required>

            <label for="user-catchcopy">キャッチコピー</label>
            <input type="text" class="form-control" name="user-catchcopy" id="user-catchcopy" required>

            <label for="news-text">自己紹介文</label>
            <textarea class="textarea form-control" name="body" id="news-text" required></textarea>

            <button class="button btn btn-success btn-sm" type="submit">修正</button>
        </form>
    </div>

    <div class="profile-task">
        <h2>Q & A</h2>
        <div class="task-box">
            <div class="favorite">
                <div class="favorite-q-box">
                    <div class="favorite-q">好きなゲーム</div>
                </div>
                <div class="favorite-a-box">
                    <div class="favorite-a">マインクラフト</div>
                </div>
                <form action="#" method="post">
                    <button class="button-green btn btn-success btn-sm" type="submit">削除</button>
                </form>
            </div>
            <div class="favorite">
                <div class="favorite-q-box">
                    <div class="favorite-q">好きなアニメ</div>
                </div>
                <div class="favorite-a-box">
                    <div class="favorite-a">BLEACH</div>
                </div>
                <form action="#" method="post">
                    <button class="button-green btn btn-success btn-sm" type="submit">削除</button>
                </form>
            </div>
            <div class="favorite">
                <div class="favorite-q-box">
                    <div class="favorite-q">好きなキャラクター</div>
                </div>
                <div class="favorite-a-box">
                    <div class="favorite-a">PSYCHO-PASS：常守朱</div>
                </div>
                <form action="#" method="post">
                    <button class="button-green btn btn-success btn-sm" type="submit">削除</button>
                </form>
            </div>
        </div>
        <div class="task-form">
            <form action="/admin/profile/user/task" method="post">
                <label for="user-question">Q</label>
                <input type="text" class="form-control" name="user-question" id="user-question">
                <label for="user-answer">A</label>
                <input type="text" class="form-control" name="user-answer" id="user-answer">

                <button class="button btn btn-success btn-sm" type="submit">追加</button>
            </form>
        </div>
    </div>
</div>
@endsection