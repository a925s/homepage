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