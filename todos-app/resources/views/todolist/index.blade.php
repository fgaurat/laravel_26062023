@extends('layouts.default')

@section('title', 'Show all todos')


@section('content')


<table class="table">

    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Todos</th>
    </tr>


    @foreach ($list as $t)
    <tr>
        <td>{{ $t->id }}</td>
        <td>{{ Str::limit($t->name,100," ...") }}</td>
        <td>
            {{ $t->todos->count()}}
        </td>
    </tr>
    @endforeach

</table>


@endsection
