@extends('admin.app')

@section('content')

<div class="add-user">
    <h3>Add User</h3>
</div>

<form action="/admin/users/store" method="post">
    @csrf
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Enter user name">
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Enter user email">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Enter user password">
    </div>
    <div class="form-group">
        <select name="role" class="form-control">
            <option value="admin">
                Admin
            </option>
            <option value="editor">
                Editor
            </option>
        </select>
    </div>
    
    <div class="form-group">
        <button class="form-button">Create User</button>
    </div>
</form>

@endsection