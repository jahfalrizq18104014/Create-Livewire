@extends('layouts.master')

@section('content') 
    <div class="container">
        <div class="mb-3">
            <label for="" class="form-label">name</label>
            <input type="text" class="form-control" value="{{$user->name}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email Addres</label>
            <input type="text" class="form-control" value="{{$user->email}}">
        </div>
       
    </div>
    
@endsection