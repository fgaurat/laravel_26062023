@extends('layouts.default')

@section('title', 'Show numbers')


@section('content')
<table class="table">
    <tr>
        <th>Valeur</th>
        <th>Action</th>
    </tr>
    @for ($i = 0; $i < 10; $i++)
    <tr>
        <td>{{ $i }}</td>
        <td>
            <a href="{{route('is_pair',["value"=>$i])}}" class="btn btn-primary">Check</a>
        </td>
    </tr>
    @endfor

</table>


@endsection
