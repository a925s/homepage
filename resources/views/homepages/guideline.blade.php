@extends('layouts.app')

@section('title', 'GUIDELINE')

@section('body_name')
<div class="guideline">
@endsection

@section('body')
<div class="guideline row">
    <div class="guideline-box">
        <div class="guideline-header scrollanime slide-left">
            <h1><span>GUIDE</span>LINE</h1>
            <p>ガイドライン</p>
        </div>
        @foreach($guidelines as $guideline)
        <div class="text-box scrollanime downup">
            <p>{{ $guideline->message }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection