@extends('layouts.admin')

@section('title', 'USER')

@section('body')
<div class="form-user">
    <div class="profile-main">
        <form action="/admin/profile/user/{id}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <label for="user-photo">ユーザー画像</label>
            <input type="file" class="form-control" name="image" id="user-photo">

            <label for="user-name">ユーザーネーム</label>
            <input type="text" class="form-control" name="name" id="user-name" value="{{ $name }}" required>

            <label for="user-catchcopy">キャッチコピー</label>
            <input type="text" class="form-control" name="catchcopy" id="user-catchcopy" value="{{ $catchcopy }}" required>

            <label for="news-text">自己紹介文</label>
            <textarea class="textarea form-control" name="message" id="news-text" required>{{ $message }}</textarea>

            <button class="button btn btn-success btn-sm" type="submit">修正</button>
        </form>
    </div>

    <div class="profile-task">
        <h2>Q & A</h2>
        <div class="task-box">
            @foreach($user->tasks as $task)
            <div class="favorite">
                <div class="favorite-q-box">
                    <div class="favorite-q">{{ $task->question }}</div>
                </div>
                <div class="favorite-a-box">
                    <div class="favorite-a">{{ $task->answer }}</div>
                </div>
                <form action="/admin/profile/task/delete" method="post">
                    <input type="hidden" name="id" value="{{ $task->id }}">
                    <button class="button-green btn btn-success btn-sm" type="submit">削除</button>
                </form>
            </div>
            @endforeach
        </div>
        <div class="task-form">
            <form action="/admin/profile/add/task" method="post">
                @csrf
                <label for="user-question">Q</label>
                <input type="text" class="form-control" name="question" id="user-question">
                <label for="user-answer">A</label>
                <input type="text" class="form-control" name="answer" id="user-answer">

                <input type="hidden" name="user_id" value="{{ $id }}">
                <button class="button btn btn-success btn-sm" type="submit">追加</button>
            </form>
        </div>
        <form action="/admin/profile/user/delete" method="post">
            @csrf
            <button class="button btn btn-success btn-sm" type="submit">ユーザー削除</button>
        </form>
    </div>
</div>
@endsection