@extends('layouts.app')

@section('title', 'PROFILE')

@section('body_name')
<div class="profile_home">
@endsection

@section('body')
<div class="profile row">
    <div class="profile-main-box">
        <div class="profile-header scrollanime slide-left">
                <h1><span>PRO</span>FILE</h1>
                <p>グループ・自己紹介</p>
        </div>
        <div class="profile-box">
            <div class="group-profile scrollanime downup">
                @foreach($groups as $group)
                <p>{{ $group->message }}</p>
                @endforeach
            </div>
            <div class="members-profile">
                <ul>
                    @foreach($users as $user)
                    <li class="member-profile scrollanime downup">
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
    </div>
</div>
@endsection