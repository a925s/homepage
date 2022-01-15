@extends('layouts.admin')

@section('title', 'REGISTER')

@section('body')
<div class="form-user">
    <form action="/admin/profile/register" method="post" enctype="multipart/form-data">
        @csrf
        <label for="user-photo">ユーザー画像</label>
        <input type="file" class="form-control" name="image" id="user-photo">
        <!-- バリデーションエラーの表示 -->
        @include('common.errors')

        <label for="user-name">ユーザーネーム</label>
        <input type="text" class="form-control" name="name" id="user-name" required>
        <!-- バリデーションエラーの表示 -->
        @include('common.errors')

        <label for="user-catchcopy">キャッチコピー</label>
        <input type="text" class="form-control" name="catchcopy" id="user-catchcopy" required>
        <!-- バリデーションエラーの表示 -->
        @include('common.errors')

        <label for="news-text">自己紹介文</label>
        <textarea class="textarea form-control" name="message" id="news-text" required></textarea>
        <!-- バリデーションエラーの表示 -->
        @include('common.errors')

        <button class="button btn btn-success btn-sm" type="submit">登録</button>
    </form>
</div>
@endsection