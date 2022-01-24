@extends('layouts.app')

@section('title', 'NAME')

@section('movie') 
<div class="forest">
    <video src="{{ asset('/img/Forest.mp4') }}" id="forest-video" autoplay muted playsinline></video>
    <div class="video-message">
        <p class="message1">好きを仕事に。</p>
        <p class="message2">人生という「ゲーム」をもっと楽しく。</p>
    </div>
    <div class="div-image">
        <img src="{{ asset('/img/next.jpg') }}" alt="ホーム画面">
        <div class="img-message">
            <p class="message3">好きを仕事に。</p>
            <p class="message4">人生という「ゲーム」をもっと楽しく。</p>
        </div>
    </div>
</div>
@endsection

@section('body')
<div class="news row">
    <div class="news-header-box">
        <div class="news-header scrollanime slide-left">
            <h1><span>NE</span>WS</h1>
            <p>新着情報</p>
        </div>
        <div class="news-header-btn scrollanime downup">
            <button onclick="location.href='/news'">more</button>
        </div>
    </div>
    <div class="articles-box scrollanime downup">
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
    <div class="profile-header scrollanime slide-left">
            <h1><span>PRO</span>FILE</h1>
            <p>グループ・自己紹介</p>
    </div>
    <div class="group-profile scrollanime downup">
        @foreach($groups as $group)
        <p>{{ $group->message }}</p>
        @endforeach
    </div>
    <div class="members-profile scrollanime downup">
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
            <div class="schedule-header scrollanime slide-left">
                <h1><span>SCHE</span>DULE</h1>
                <p>スケジュール</p>
            </div>
            <div class="schedule-header-btn scrollanime downup">
                <button onclick="location.href='/schedule'">more</button>
            </div>
        </div>
        <div class="schedules-box scrollanime downup">
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