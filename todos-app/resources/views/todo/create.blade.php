@extends('layouts.default')

@section('title', 'Create todo')


@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{route("todo.create")}}">
        @csrf
        <div class="mb-3">
            <label for="todoTitle" class="form-label">Todo title</label>
            <input type="text" class="form-control" id="todoTitle" name="todoTitle">
            <label for="tags" class="form-label">Todo tags</label>
            <input type="text" class="form-control" id="tags" name="todoTags" value="tag1, tag2, tag3">
            <div id="emailHelp" class="form-text">Todo title</div>
            @error('todoTitle')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="todoDone" name="todoDone">
            <label class="form-check-label" for="todoDone">Done ?</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
