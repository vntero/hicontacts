@extends('contacts.layout')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <h2>Enter the details below:</h2>
    </div>
<div class="card-body">
<div class="mb-12">
    <form action="{{ url('contacts/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id"/>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$contacts->name}}"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$contacts->email}}"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$contacts->phone}}"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="country" value="{{$contacts->country}}"></br> </br>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
    <a href="/contacts"><button class="btn btn-secondary">Cancel</button></a>
</div>
@stop