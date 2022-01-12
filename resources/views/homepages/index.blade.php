@extends('layouts.app')

@section('title', 'NAME')

@section('movie') 
<div class="forest">
    <video src="{{ asset('/img/Forest.mp4') }}" autoplay muted playsinline></video>
</div>
@endsection

@section('body')
<div class="news row">
    <div class="news-header-box">
        <div class="news-header">
            <h1><span>NE</span>WS</h1>
            <p>新着情報</p>
        </div>
        <div class="news-header-btn">
            <button onclick="location.href='/news'">more</button>
        </div>
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
<div class="profile row">
    <div class="profile-header">
            <h1><span>PRO</span>FILE</h1>
            <p>グループ・自己紹介</p>
    </div>
    <div class="group-profile">
        <p>グループの自己紹介グループの自己紹介グループの自己紹介グループの自己紹介グループの自己紹介グループの自己紹介グループの自己紹介グループの自己紹介グループの自己紹介グループの自己紹介グループの自己紹介グループの自己紹介グループの自己紹介グループの自己紹介グループの自己紹介グループの自己紹介</p>
    </div>
    <div class="members-profile">
        <ul>
            <li class="member-profile">
                <div class="member-profile-box">
                    <div class="member-photo">
                        <a href="#"><img src="{{ asset('/img/home_favicon.jpg') }}" alt="プロフィール画像"></a>
                    </div>
                    <div class="member-text">
                        <h2>NAME</h2>
                        <p>ニックネーム</p>
                        <button onclick="location.href='#'">▶</button>
                    </div>
                </div>
            </li> 
            <li class="member-profile">
                <div class="member-profile-box">
                    <div class="member-photo">
                        <a href="#"><img src="{{ asset('/img/home_favicon.jpg') }}" alt="プロフィール画像"></a>
                    </div>
                    <div class="member-text">
                        <h2>NAME</h2>
                        <p>ニックネーム</p>
                        <button onclick="location.href='#'">▶</button>
                    </div>
                </div>
            </li>             
            <li class="member-profile">
                <div class="member-profile-box">
                    <div class="member-photo">
                        <a href="#"><img src="{{ asset('/img/home_favicon.jpg') }}" alt="プロフィール画像"></a>
                    </div>
                    <div class="member-text">
                        <h2>NAME</h2>
                        <p>ニックネーム</p>
                        <button onclick="location.href='#'">▶</button>
                    </div>
                </div>
            </li>             
            <li class="member-profile">
                <div class="member-profile-box">
                    <div class="member-photo">
                        <a href="#"><img src="{{ asset('/img/home_favicon.jpg') }}" alt="プロフィール画像"></a>
                    </div>
                    <div class="member-text">
                        <h2>NAME</h2>
                        <p>ニックネーム</p>
                        <button onclick="location.href='#'">▶</button>
                    </div>
                </div>
            </li>             
            <li class="member-profile">
                <div class="member-profile-box">
                    <div class="member-photo">
                        <a href="#"><img src="{{ asset('/img/home_favicon.jpg') }}" alt="プロフィール画像"></a>
                    </div>
                    <div class="member-text">
                        <h2>NAME</h2>
                        <p>ニックネーム</p>
                        <button onclick="location.href='#'">▶</button>
                    </div>
                </div>
            </li> 
        </ul>
    </div>
</div>
<div class="schedule row">
    <div class="schedule-header">
        <h1><span>SCHE</span>DULE</h1>
        <p>スケジュール</p>
    </div>
    <div class="schedules-box">
        <div class="schedule-box">
            <div class="schedule-day">
                <p>2022-01-02</p>
            </div>
            <div class="schedule-text">
                <div class="schedule-text-box">
                    <p class="light-box">LIVE</p>
                    <h3>マイクラ配信</h3>
                    <p class="start-day">2022-01-02 14:00</p>
                </div>
                <div class="profile-icon-box">
                    <div class="profile-icon">
                        <img src="{{ asset('/img/home_favicon.jpg') }}" alt="プロフィール画像">
                    </div>
                    <div class="profile-icon">
                        <img src="{{ asset('/img/home_favicon.jpg') }}" alt="プロフィール画像">
                    </div>
                </div>
            </div>
        </div>
        <div class="schedule-box">
            <div class="schedule-day">
                <p>2022-01-02</p>
            </div>
            <div class="schedule-text">
                <div class="schedule-text-box">
                    <p class="light-box">LIVE</p>
                    <h3>マイクラ配信</h3>
                    <p class="start-day">2022-01-02 14:00</p>
                </div>
                <div class="profile-icon-box">
                    <div class="profile-icon">
                        <img src="{{ asset('/img/home_favicon.jpg') }}" alt="プロフィール画像">
                    </div>
                    <div class="profile-icon">
                        <img src="{{ asset('/img/home_favicon.jpg') }}" alt="プロフィール画像">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection