@extends('contacts.layout')

@section('content')
  <div class="card text-center">
    <div class="card-header">
        <h2>Enter the details below:</h2>
    </div>
  <div class="card-body">
  <div class="mb-12">
      <form action="{{ url('contacts') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-label"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-label"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" class="form-label"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="country" class="form-label"></br> </br>
    </div>
        <button class="btn btn-primary">Add</button>
    </form>
    <a href="/contacts"><button class="btn btn-secondary">Cancel</button></a>
@stop