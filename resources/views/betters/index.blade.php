@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1>Betters</h1>
    <!-- @foreach($betters as $better)
       <p> {{ $better }} </p>
    @endforeach -->
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Bet</th>
                <th>Horse</th>
                <th>Actions</th>
            </tr>
        @foreach ($betters as $better)
        <tr>
            <td>{{ $better->name }}</td>
            <td>{{ $better->surname }}</td>
            <td>{{ $better->bet }}</td>
            <td>{{ $better->horse_id }}</td>
            <td>
                <form action="/betters/{{ $better->id }}" method="POST">
                    <a class="btn btn-success" href="{{ route('better.show', $better->id) }}">Modify</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
            </td>
 
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('better.create') }}" class="btn btn-success">Add</a>
        
    </div>
</div>

</div>

@endsection