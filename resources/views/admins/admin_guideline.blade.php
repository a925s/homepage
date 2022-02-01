@extends('layouts.admin')

@section('title', 'GUIDELINE')

@section('body')
<div class="form-guideline">
    <h1><span>GUIDE</span>LINE</h1>
    <div class="new-guideline-box">
        <form action="/admin/guideline" method="post">
            @csrf
            <label for="guideline-text">ガイドライン本文</label>
            @if($guideline === null)
                <textarea class="textarea form-control" name="message" id="guideline-text" required></textarea>
            @else
                <textarea class="textarea form-control" name="message" id="guideline-text" required>{{ $guideline->message }}</textarea>
            @endif
            <button class="button btn btn-success btn-sm" type="submit">編集</button>
        </form>
    </div>
</div>
@endsection