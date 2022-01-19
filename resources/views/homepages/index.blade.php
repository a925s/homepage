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
        @foreach($articles as $article)
        <div class="article-box">
            <p class="date">{{ $article->created_at->format('Y-m-d') }}</p>
            <p>{{ $article->title }}</p>
            <button onclick="location.href='/news/article/{{ $article->id }}'">▶</button>
        </div>
        @endforeach
    </div>
</div>
<div class="profile row">
    <div class="profile-header">
            <h1><span>PRO</span>FILE</h1>
            <p>グループ・自己紹介</p>
    </div>
    <div class="group-profile">
        @foreach($groups as $group)
        <p>{{ $group->message }}</p>
        @endforeach
    </div>
    <div class="members-profile">
        <ul>
            @foreach($users as $user)
            <li class="member-profile">
                <div class="member-profile-box">
                    <div class="member-photo">
                        <a href="/profile/{{ $user->id }}"><img src="{{ Storage::url($user->image_path) }}" alt="プロフィール画像"></a>
                    </div>
                    <div class="member-text">
                        <h2>{{  $user->name }}</h2>
                        <p>{{ $user->catchcopy }}</p>
                        <button onclick="location.href='/profile/{{ $user->id }}'">▶</button>
                    </div>
                </div>
            </li> 
            @endforeach
        </ul>
    </div>
</div>
<div class="schedule row">
    <div class="schedule-main-box">
        <div class="schedule-header-box">
            <div class="schedule-header">
                <h1><span>SCHE</span>DULE</h1>
                <p>スケジュール</p>
            </div>
            <div class="schedule-header-btn">
                <button onclick="location.href='/schedule'">more</button>
            </div>
        </div>
        <div class="schedules-box">
            @foreach($schedules as $schedule)
            <div class="schedule-box">
                @if($schedule == $first)
                <div class="schedule-day-box">
                    <div class="schedule-day">
                        <p>{{ $schedule->start_date }}</p>
                    </div>
                </div>
                @elseif($schedule->start_date !== $schedules[$count-1]->start_date)
                <div class="schedule-day-box">
                    <div class="schedule-day">
                        <p>{{ $schedule->start_date }}</p>
                    </div>
                </div>
                @endif
                <div class="schedule-text">
                    <div class="schedule-text-box">
                        <p class="light-box">LIVE</p>
                        <h3>{{ $schedule->title }}</h3>
                        <p class="start-day">{{ $schedule->start_date." ".$schedule->start_time }}</p>
                    </div>
                    <div class="profile-icon-box">
                        @foreach($schedule->users as $user)
                        <div class="profile-icon">
                            <img src="{{ Storage::url($user->image_path) }}" alt="プロフィール画像">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <?php $count++; ?>
            @endforeach
        </div>
    </div>
</div>
@endsection