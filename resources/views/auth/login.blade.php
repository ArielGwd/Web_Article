@extends('layout')

@section('content')

<form action="/login/submit" method="post">
    @csrf 

    <div class="form-h3">
        <h3>Masuk Kedalam Aplikasi</h3>
        @if(session('error'))
        <p>{{ session('error') }}</p>
        @endif    
    </div>
    <div class="form-group">
        <input class="form-control" type="email" name="email" placeholder="Enter email address" required>
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="password" placeholder="Enter password" required>
    </div>
    <div class="form-group">
       <button class="form-button" type="submit">
        Login
       </button>
    </div>
    
</form>

@endsection