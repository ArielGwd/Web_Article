@extends('admin.app')

@section('content')

<div class="add-user">
    <h3>Add Articles</h3>
</div>


<form action="/admin/articles/store" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="title" placeholder="Masukkan Judul">
    </div>
    
    <div class="form-group">
        <textarea name="body" class="form-control" rows="10" placeholder="Masukkan isi artikel"></textarea>
    </div>

    <div class="form-group">
        <input type="date" class="form-control" name="date">
    </div>

    <div class="form-group">
        <button class="form-button">Submit</button>
    </div>
</form>

@endsection