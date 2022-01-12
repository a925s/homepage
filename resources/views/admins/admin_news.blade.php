@extends('layouts.admin')

@section('title', 'NEWS')

@section('body')
<div class="form-news">
    <h1><span>NE</span>WS</h1>
    <div class="new-article-box">
        <form action="/admin/news" method="post">
            @csrf
            <label for="news-title">タイトル</label>
            <input type="text" class="form-control" name="news-title" id="news-title" required autofocus>
            <label for="news-text">内容</label>
            <textarea class="textarea form-control" name="body" id="news-text" required></textarea>
            <button class="button btn btn-success btn-sm" type="submit">投稿</button>
        </form>
    </div>
    <div class="articles-box">
        <div class="article-box">
            <p class="date">2020-01-04</p>
            <p class="text">チャンネル登録者数10万人記念配信決定！</p>
            <div class="button-box">
                <form action="#" method="post">
                    <button class="button-green btn btn-success btn-sm" type="submit">修正</button>
                </form>
                <form action="#" method="post">
                    <button class="button-green btn btn-success btn-sm" type="submit">削除</button>
                </form>
            </div>
        </div>
        <div class="article-box">
            <p class="date">2020-01-04</p>
            <p class="text">チャンネル登録者数10万人記念配信決定！</p>
            <div class="button-box">
                <form action="#" method="post">
                    <button class="button-green btn btn-success btn-sm" type="submit">修正</button>
                </form>
                <form action="#" method="post">
                    <button class="button-green btn btn-success btn-sm" type="submit">削除</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection