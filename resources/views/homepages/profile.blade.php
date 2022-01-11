@extends('layouts.app')

@section('title', 'PROFILE')

@section('body_name')
<div class="profile_main">
@endsection

@section('body')
<div class="profile row">
    <div class="profile-detail-box">
        <div class="profile-header">
                <h1><span>PRO</span>FILE</h1>
                <p>グループ・自己紹介</p>
        </div>
        <div class="details-box">
            <div class="profile-detail-photo">
                <img src="{{ asset('/img/home_favicon.jpg') }}" alt="プロフィール画像">
            </div>
            <div class="profile-detail-text">
                <div class="detail-box">
                    <div class="profile-detail-name">
                        <p class="nickname">ニックネーム</p>
                        <h2>NAME</h2>
                    </div>
                    <button onclick="location.href='#'">▶</button>
                </div>
                <p class="introduction">自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文自己紹介文</p>
                <div class="favorite">
                    <div class="favorite-q">好きなゲーム</div>
                    <div class="favorite-a">マインクラフト</div>
                </div>
                <div class="favorite">
                    <div class="favorite-q">好きなアニメ</div>
                    <div class="favorite-a">BLEACH</div>
                </div>
                <div class="favorite">
                    <div class="favorite-q">好きなキャラクター</div>
                    <div class="favorite-a">PSYCHO-PASS：常守朱</div>
                </div>
            </div>
        </div>
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
@endsection