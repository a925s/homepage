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
        @foreach($articles as $article)
        <div class="article-box">
            <p class="date">{{ $article->created_at->format('Y-m-d') }}</p>
            <p class="text">{{ $article->title }}</p>
            <div class="button-box">
                <button class="button-green btn btn-success btn-sm" onclick="location.href='/admin/news/article/{{ $article->id }}'">修正</button>
                <form action="#" method="post">
                    <button class="button-green btn btn-success btn-sm" type="submit">削除</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection