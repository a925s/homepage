@extends('layouts.admin')

@section('title', 'SCHEDULE')

@section('body')
<div class="form-schedule">
    <h1><span>SCHE</span>DULE</h1>
    <div class="new-schedule-box">
        <form action="/admin/schedule/edit" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <label for="schedule-title">タイトル</label>
            <input type="text" class="form-control" name="title" id="schedule-title" value="{{ $title }}" required autofocus>
            <!-- バリデーションエラーの表示 -->
            @include('common.errors')

            <label for="schedule-day">配信日時</label>
            <input type="date" class="form-control" name="start_date" id="schedule-title" value="{{ $start_date }}" max="2200-12-31" required>
            <!-- バリデーションエラーの表示 -->
            @include('common.errors')

            <label for="schedule-time">配信時刻</label>
            <input type="time" class="form-control" name="start_time"  id="schedule-time" value="{{ $start_time }}" required>
            <!-- バリデーションエラーの表示 -->
            @include('common.errors')

            <h2>配信ユーザー</h2>
            <div class="checkbox">
                @foreach($users as $user)
                <div class="form-checkbox form-check">
                    <label for="schedule-user" class="form-check-label"><img src="{{ Storage::url($user->image_path) }}" alt="ユーザーアイコン"></label>
                    <input type="checkbox" class="form-check-input" name="users[]" id="schedule-user" value="{{ $user->id }}">
                </div>
                @endforeach
            </div>

            <button class="button btn btn-success btn-sm" type="submit">編集</button>
        </form>
    </div>
</div>
@endsection