@extends('layouts.admin')

@section('title', 'PROFILE')

@section('body')
<div class="form-profile">
    <form action="/admin/profile" method="post">
        @csrf
        <label for="news-text">グループ紹介文</label>
        @foreach($groups as $group)
        <textarea class="textarea form-control" name="message" id="news-text" required>{{ $group->message }}</textarea>
        @endforeach
        <button class="button btn btn-success btn-sm" type="submit">修正</button>
    </form>

    <h2>ユーザー修正</h2>
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
    <button class="button btn btn-success btn-sm" onclick="location.href='/admin/profile/register'">ユーザー新規登録</button>
</div>
@endsection