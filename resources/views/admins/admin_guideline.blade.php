@extends('layouts.admin')

@section('title', 'GUIDELINE')

@section('body')
<div class="form-guideline">
    <h1><span>GUIDE</span>LINE</h1>
    <div class="new-guideline-box">
        <form action="/admin/guideline" method="post">
            @csrf
            <label for="guideline-text">ガイドライン本文</label>
            <textarea class="textarea form-control" name="body" id="guideline-text" required></textarea>
            <button class="button btn btn-success btn-sm" type="submit">投稿</button>
        </form>
    </div>
</div>
@endsection