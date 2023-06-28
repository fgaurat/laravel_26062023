@extends('layouts.default')

@section('title', 'Show all todos')


@section('content')




<table class="table">

    <tr>
        <th>#</th>
        <th>TodoList Name</th>
        <th>Title</th>
        <th>Tags</th>
        <th>Done</th>
        <th></th>
    </tr>


    @foreach ($todos as $todo)
    <tr>
        <td>{{ $todo->id }}</td>
        <td>{{ $todo->todoList->name }}</td>
        <td>{{ Str::limit($todo->title,100," ...") }}</td>
        <td>
            @foreach($todo->tags as $tag)
            {{$tag->name}}
            @endforeach
        </td>
        <td>{{ $todo->done?"ok":"ko" }}</td>
        <td>
            <a href="{{route('todo.show',['todo'=>$todo->id])}}" class="btn btn-info">Show</a>
            <a href="{{route('todo.delete',['todo'=>$todo->id])}}" class="btn btn-danger">Delete</a>

        </td>
    </tr>
    @endforeach

</table>


@endsection
