@extends('layouts.default')
@section('title', 'Create todo')
@section('content')
<h1>Show Todos</h1>


<script>
window.onload = ()=>{

    let btnLoad = document.getElementById('btn-load');
    let tableBody = document.getElementById('todos-table').getElementsByTagName('tbody')[0];


    btnLoad.onclick = ()=>{
        fetch('http://localhost:8000/todosapi')
        .then(response => response.json())
        .then(todos => {
            let newRows = '';
            todos.forEach(todo => {
                newRows += `<tr>
                                    <td>${todo.id}</td>
                                    <td>${todo.title}</td>
                                    <td>${todo.completed ? 'Yes' : 'No'}</td>
                                </tr>`;
            });
            tableBody.innerHTML = newRows;

        })
    }

}


</script>


<button id="btn-load">load</button>


<table class="table" id="todos-table">
    <thead>

        <tr>
            <th>#</th>
            <th>title</th>
            <th>completed</th>
        </tr>
    </thead>
    <tbody>

    </tbody>


</table>
@endsection
