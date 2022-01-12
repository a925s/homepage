@extends('layouts.admin')

@section('title', 'SCHEDULE')

@section('body')
<div class="form-schedule">
    <h1><span>SCHE</span>DULE</h1>
    <div class="new-schedule-box">
        <form action="/admin/schedule" method="post">
            @csrf
            <label for="schedule-title">タイトル</label>
            <input type="text" class="form-control" name="schedule-title" id="schedule-title" required autofocus>

            <label for="schedule-day">配信日時</label>
            <input type="date" class="form-control" name="schedule-day" id="schedule-title" max="2200-12-31" required>
            <label for="schedule-time">配信時刻</label>
            <input type="time" class="form-control" name="schedule-time"  id="schedule-time" required>

            <h2>配信ユーザー</h2>
            <div class="checkbox">
                <div class="form-checkbox form-check">
                    <label for="schedule-user1" class="form-check-label"><img src="{{ asset('/img/home_favicon.jpg') }}" alt="ユーザーアイコン"></label>
                    <input type="checkbox" class="form-check-input" name="schedule-user" id="schedule-user1" value="1" checked>
                </div>
                <div class="form-checkbox form-check">
                    <label for="schedule-user2" class="form-check-label"><img src="{{ asset('/img/home_favicon.jpg') }}" alt="ユーザーアイコン"></label>
                    <input type="checkbox" class="form-check-input" name="schedule-user" id="schedule-user2" value="2">
                </div>
                <div class="form-checkbox form-check">
                    <label for="schedule-user3" class="form-check-label"><img src="{{ asset('/img/home_favicon.jpg') }}" alt="ユーザーアイコン"></label>
                    <input type="checkbox" class="form-check-input" name="schedule-user" id="schedule-user3" value="3">
                </div>
                <div class="form-checkbox form-check">
                    <label for="schedule-user4" class="form-check-label"><img src="{{ asset('/img/home_favicon.jpg') }}" alt="ユーザーアイコン"></label>
                    <input type="checkbox" class="form-check-input" name="schedule-user" id="schedule-user4" value="4">
                </div>
                <div class="form-checkbox form-check">
                    <label for="schedule-user5" class="form-check-label"><img src="{{ asset('/img/home_favicon.jpg') }}" alt="ユーザーアイコン"></label>
                    <input type="checkbox" class="form-check-input" name="schedule-user" id="schedule-user5" value="5">
                </div>
            </div>

            <button class="button btn btn-success btn-sm" type="submit">投稿</button>
        </form>
    </div>
    <div class="schedules-box">
        <div class="schedule-box">
            <div class="schedule-day-box">
                <div class="schedule-day">
                    <p>2022-01-02</p>
                </div>
            </div>
            <div class="schedule-text">
                <div class="schedule-text-box">
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
                <div class="button-box">
                    <form action="#" method="post">
                        <button class="button-green btn btn-success btn-sm" type="submit">修正</button>
                    </form>
                    <form action="#" method="post">
                        <button class="button-green btn btn-success btn-sm" type="submit">削除</button>
                    </form>
                </div>
            </div>
            <div class="schedule-text">
                <div class="schedule-text-box">
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
        <div class="schedule-box">
            <div class="schedule-day-box">
                <div class="schedule-day">
                    <p>2022-01-02</p>
                </div>
            </div>
            <div class="schedule-text">
                <div class="schedule-text-box">
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
                    <div class="profile-icon">
                        <img src="{{ asset('/img/home_favicon.jpg') }}" alt="プロフィール画像">
                    </div>
                </div>
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
</div>
@endsection