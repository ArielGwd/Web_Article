@extends('admin.app')

@section('content')

<div class="add-user">
    <h3>Data Articles</h3>
    <div class="table-add">
        <a href="/admin/articles/add">+ Add Articles</a>
    </div>
</div>

<div class="table-bg">
    <table class="table-data">
        <tr>
            <td>No</td>
            <td>Author</td>
            <td>Title</td>
            <td>Date</td>
            <td>Body</td>
            <td>Action</td>
        </tr>
        
        @foreach($articles as $i=>$data)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $data->user->name }}</td>
            <td>{{ $data->title }}</td>
            <td>{{ $data->date }}</td>
            <td>{{ $data->body }}</td>
            <td>
            @if(Auth::user()->id == $data->user_id)
                <div class="table-edit">
                    <a href="/admin/articles/edit/{{ $data->id }}"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                </div>
                <div class="table-delete">
                    <a href="/admin/articles/delete/{{ $data->id }}"><i class="fa-solid fa-trash-can"></i>Delete</a>
                </div>
            @endif
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection