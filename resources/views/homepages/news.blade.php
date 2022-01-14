@extends('layouts.app')

@section('title', 'NEWS')

@section('body_name')
<div class="news_main">
@endsection

@section('body')
<div class="news row">
    <div class="news-box">
        <div class="news-header">
            <h1><span>NE</span>WS</h1>
            <p>新着情報</p>
        </div>
        <div class="articles-box">
            @foreach($articles as $article)
            <div class="article-box">
                <p class="date">{{ $article->created_at->format('Y-m-d') }}</p>
                <p>{{ $article->title }}</p>
                <button onclick="location.href='/news/article/{{ $article->id }}'">▶</button>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection