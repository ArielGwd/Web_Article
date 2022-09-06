@extends('layout')

@section('content')

<div class="article-data">
    <h3 class="article-title">
        {{ $article->title }}
    </h3>
    <small>Date : {{$article->date}} Author : {{ $article->user->name }}</small>

    <p class="article-body">{{ $article->body }}</p>
</div>

<div class="back">
    <a href="/"><i class="fa-solid fa-backward"></i> Back</a>
</div>

@endsection