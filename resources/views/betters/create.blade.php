@extends('layouts.app')
@section('content')

<div class="container-fluid">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Enter new bet:</div>
               <div class="card-body">
                   <form action="{{ route('better.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name: </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Surname: </label>
                            <input type="text" name="surname" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Bet: </label>
                            <input type="number" name="bet" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Horse: </label>
                            <select name="horse_id">
                            @foreach ($horses as $horse)
                                <option value="{{ $horse->id }}">{{ $horse->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
