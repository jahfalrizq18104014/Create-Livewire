@extends('layouts.master')

@section('content') 
    <div class="container">
        <div class="mb-3">
       <label for="" class="form-label">name</label>
       <input type="text" type="form-control" value="{{$user->name}}" disabled>
    </div>`
    <div class="container">
        <div class="mb-3">
       <label for="" class="form-label">Email Addres</label>
       <input type="text" type="form-control" value="{{$user->email}}"disabled>
    </div>`
</div>
    
@endsection