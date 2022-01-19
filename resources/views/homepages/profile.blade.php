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
                <img src="{{ Storage::url($image_path) }}" alt="プロフィール画像">
            </div>
            <div class="profile-detail-text">
                <div class="detail-box">
                    <div class="profile-detail-name">
                        <p class="nickname">{{ $catchcopy }}</p>
                        <h2>{{ $name }}</h2>
                    </div>
                    @if($id == $last_id)
                    <button onclick="location.href='/profile/{{ $first_id }}'">▶</button>
                    @else
                    <button onclick="location.href='/profile/{{ $next_id }}'">▶</button>
                    @endif
                </div>
                <p class="introduction">{{ $message }}</p>
                @foreach($user->tasks as $task)
                <div class="favorite">
                    <div class="favorite-q">{{ $task->question }}</div>
                    <div class="favorite-a">{{ $task->answer }}</div>
                </div>
                @endforeach
            </div>
        </div>
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
                        <h2>{{ $user->name }}</h2>
                        <p>{{ $user->catchcopy }}</p>
                        <button onclick="location.href='/profile/{{ $user->id }}'">▶</button>
                    </div>
                </div>
            </li> 
            @endforeach
        </ul>
    </div>
</div>
@endsection