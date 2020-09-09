@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1>Horses</h1>
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Runs</th>
                <th>Wins</th>
                <th>About</th>
                <th>Actions</th>
            </tr>
        @foreach ($horses as $horse)
        <tr>
            <td>{{ $horse->name }}</td>
            <td>{{ $horse->runs }}</td>
            <td>{{ $horse->wins }}</td>
            <td>{!! $horse->about !!}</td>
            <td>
                <form action="/horses/{{ $horse->id }}" method="POST">
                    <a class="btn btn-success" href="{{ route('horse.show', $horse->id) }}">Modify</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('horse.create') }}" class="btn btn-success">Add</a>
    </div>
</div>

</div>

@endsection