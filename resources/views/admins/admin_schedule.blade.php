@extends('layouts.admin')

@section('title', 'SCHEDULE')

@section('body')
<div class="form-schedule">
    <h1><span>SCHE</span>DULE</h1>
    <div class="new-schedule-box">
        <form action="/admin/schedule" method="post">
            @csrf
            <label for="schedule-title">タイトル</label>
            <input type="text" class="form-control" name="title" id="schedule-title" required autofocus>

            <label for="schedule-day">配信日時</label>
            <input type="date" class="form-control" name="start_date" id="schedule-title" max="2200-12-31" required>
            <label for="schedule-time">配信時刻</label>
            <input type="time" class="form-control" name="start_time"  id="schedule-time" required>

            <h2>配信ユーザー</h2>
            <div class="checkbox">
                @foreach($users as $user)
                <div class="form-checkbox form-check">
                    <label for="schedule-user" class="form-check-label"><img src="{{ Storage::url($user->image_path) }}" alt="ユーザーアイコン"></label>
                    <input type="checkbox" class="form-check-input" name="users[]" id="schedule-user" value="{{ $user->id }}">
                </div>
                @endforeach
            </div>

            <button class="button btn btn-success btn-sm" type="submit">投稿</button>
        </form>
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
                <div class="button-box">
                    <button class="button-green btn btn-success btn-sm" onclick="location.href='/admin/schedule/{{ $schedule->id }}'">修正</button>
                    <form action="/admin/schedule/delete" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $schedule->id }}">
                        <button class="button-green btn btn-success btn-sm" type="submit">削除</button>
                    </form>
                </div>
            </div>
        </div>
        <?php $count++; ?>
        @endforeach
    </div>
</div>
@endsection