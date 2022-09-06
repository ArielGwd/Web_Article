@extends('admin.app')

@section('content')

<div class="add-user">
    <h3>Edit Articles</h3>
</div>


<form action="/admin/articles/update/{{ $article->id }}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="title" placeholder="Masukkan Judul" value="{{ $article->title }}">
    </div>
    
    <div class="form-group">
        <textarea name="body" class="form-control" rows="10" placeholder="Masukkan isi artikel">{{ $article->body }}</textarea>
    </div>

    <div class="form-group">
        <input type="date" class="form-control" value="{{ $article->date }}" name="date">
    </div>

    <div class="form-group">
        <button class="form-button">Update</button>
    </div>
</form>

@endsection