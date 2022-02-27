@extends('contacts.layout')

@section('content')
      
      <form action="{{ url('contacts') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="country"></br> </br>
        <button>Add</button>
    </form>
    <a href="/contacts"><button>Cancel</button></a>
@stop