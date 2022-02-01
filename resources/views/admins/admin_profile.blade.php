@extends('layouts.admin')

@section('title', 'PROFILE')

@section('body')
<div class="form-profile">
    <form action="/admin/profile" method="post">
        @csrf
        <label for="news-text">グループ紹介文</label>
        @if($group === null)
            <textarea class="textarea form-control" name="message" id="news-text" required></textarea>
        @else
            <textarea class="textarea form-control" name="message" id="news-text" required>{{ $group->message }}</textarea>
        @endif
        <button class="button btn btn-success btn-sm" type="submit">修正</button>
    </form>

    <h2>ユーザー修正</h2>
    <div class="members-profile">
        <ul>
            @foreach($users as $user)
            <li class="member-profile">
                <div class="member-profile-box">
                    <div class="member-photo">
                        <a href="/admin/profile/user/{{ $user->id }}"><img src="{{ Storage::url($user->image_path) }}" alt="プロフィール画像"></a>
                    </div>
                    <div class="member-text">
                        <h2>{{ $user->name }}</h2>
                        <p>{{ $user->catchcopy }}</p>
                        <button onclick="location.href='/admin/profile/user/{{ $user->id }}'">▶</button>
                    </div>
                </div>
            </li> 
            @endforeach
        </ul>
    </div>
    <button class="button btn btn-success btn-sm" onclick="location.href='/admin/profile/register'">ユーザー新規登録</button>
</div>
@endsection