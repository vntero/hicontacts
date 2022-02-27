@extends('contacts.layout')

@section('content')
    
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
        <button>Update</button>
    </form>
    <a href="/contacts"><button>Cancel</button></a>

@stop