@extends('admin.app')

@section('content')

<div class="add-user">
    <h3>Data Users</h3>
    <div class="table-add">
        <a href="/admin/users/add">+ Add Users</a>
    </div>
</div>

<div class="table-bg">
    <table class="table-data">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Role</td>
            <td>Action</td>
        </tr>
        
        @foreach($users as $i=>$data)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->role }}</td>
            <td>
                <div class="table-edit">
                    <a href="/admin/users/edit/{{ $data->id }}"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                </div>
                <div class="table-delete">
                    @if(Auth::user()->id != $data->id)
                        <a href="/admin/users/delete/{{ $data->id }}"><i class="fa-solid fa-trash-can"></i>Delete</a>
                    @endif
                </div>
                
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection