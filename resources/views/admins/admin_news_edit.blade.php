@extends('layouts.admin')

@section('title', 'NEWS')

@section('body')
<div class="form-news">
    <h1><span>NE</span>WS</h1>
    <div class="new-article-box">
        <form action="/admin/news/article/{id}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <label for="news-title">タイトル</label>
            <input type="text" class="form-control" name="title" id="news-title" value="{{ $title }}" required autofocus>
            <!-- バリデーションエラーの表示 -->
            @include('common.errors')

            <label for="news-text">内容</label>
            <textarea class="textarea form-control" name="message" id="news-text" required>{{ $message }}</textarea>
            <!-- バリデーションエラーの表示 -->
            @include('common.errors')
            
            <button class="button btn btn-success btn-sm" type="submit">編集</button>
        </form>
    </div>
</div>
@endsection