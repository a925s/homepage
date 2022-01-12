@extends('layouts.admin')

@section('title', 'SCHEDULE')

@section('body')
<div class="form-schedule">
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
@endsection