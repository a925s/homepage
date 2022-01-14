@extends('layouts.admin')

@section('title', 'NEWS')

@section('body')
<div class="form-news">
    <h1><span>NE</span>WS</h1>
    <div class="new-article-box">
        <form action="/admin/news" method="post">
            @csrf
            <label for="news-title">タイトル</label>
            <input type="text" class="form-control" name="news-title" id="news-title" value="{{ $title }}" required autofocus>
            <label for="news-text">内容</label>
            <textarea class="textarea form-control" name="body" id="news-text" required>{{ $message }}</textarea>
            <button class="button btn btn-success btn-sm" type="submit">編集</button>
        </form>
    </div>
</div>
@endsection