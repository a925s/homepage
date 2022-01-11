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
            <div class="article-box">
                <p class="date">2020-01-04</p>
                <p>チャンネル登録者数10万人記念配信決定！</p>
                <button onclick="location.href='#'">▶</button>
            </div>
            <div class="article-box">
                <p class="date">2020-01-04</p>
                <p>チャンネル登録者数10万人記念配信決定！</p>
                <button onclick="location.href='#'">▶</button>
            </div>
        </div>
    </div>
</div>
@endsection