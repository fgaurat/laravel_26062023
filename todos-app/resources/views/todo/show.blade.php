@extends('layouts.default')

@section('title', 'Show one todo')


@section('content')
<h1>Todo {{$todo->id}}</h1>
<p>
    {{$todo->title}}
    <br>
    Is completed ? {{$todo->done?"Yes":"No"}}
</p>

@endsection
