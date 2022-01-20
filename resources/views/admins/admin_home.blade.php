@extends('layouts.admin')

@section('title', 'ADMIN')

@section('body')
    <form action="/admin" method="post" enctype="multipart/form-data">
        @csrf
        <button class="button btn btn-success btn-sm" type="submit">ログアウト</button>
    </form>
@endsection
