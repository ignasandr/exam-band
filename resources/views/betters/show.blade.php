@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit better info</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('better.show', $better->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $better->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Surname</label>
                            <input type="text" name="surname" class="form-control" value="{{ $better->surname }}">
                        </div>
                        <div class="form-group">
                            <label for="">Bet</label>
                            <input type="number" name="bet" class="form-control" value="{{ $better->bet }}">
                        </div>
                        <div class="form-group">
                            <label>Horse: </label>
                            <select name="horse_id">
                            @foreach ($horses as $horse)
                                <option value="{{ $horse->id }}" >{{ $horse->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Modify</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
