@extends('layouts.app')

@section('title', 'GUIDELINE')

@section('body_name')
<div class="guideline">
@endsection

@section('body')
<div class="guideline row">
    <div class="guideline-box">
        <div class="guideline-header">
            <h1><span>GUIDE</span>LINE</h1>
            <p>ガイドライン</p>
        </div>
        @foreach($guidelines as $guideline)
        <div class="text-box">
            <p>{{ $guideline->message }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection