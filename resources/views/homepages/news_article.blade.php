@extends('layouts.app')

@section('title', 'NEWS')

@section('body_name')
<div class="news_main_article">
@endsection

@section('body')
<div class="news row">
    <div class="news-box">
        <div class="news-header scrollanime slide-left">
            <h1><span>NE</span>WS</h1>
            <p>新着情報</p>
        </div>
        <div class="articles-box scrollanime downup">
            <div class="article-box">
                <p class="date">{{ $date }}</p>
                <h2>{{ $title }}</h2>
                <p>{{ $message }}</p>
            </div>
        </div>
    </div>
</div>
@endsection