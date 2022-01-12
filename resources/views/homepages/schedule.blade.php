@extends('layouts.app')

@section('title', 'SCHEDULE')

@section('body_name')
<div class="schedule_main">
@endsection

@section('body')
<div class="schedule row">
    <div class="schedule-main-box">
        <div class="schedule-header">
            <h1><span>SCHE</span>DULE</h1>
            <p>スケジュール</p>
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
                <div class="schedule-day-box">
                    <div class="schedule-day">
                        <p>2022-01-02</p>
                    </div>
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
</div>
@endsection