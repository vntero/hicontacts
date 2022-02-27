@extends('app')

@section('content') 

    <h1>
        Create a new contact:
    </h1>
    
    <form action="">
        <input type="text" name="name" placeholder="Enter your name" required><br>
        <label for=""> </label><br>
        <input type="email" name="email" placeholder="What's your email?" required><br>
        <label for=""> </label><br>
        <input type="tel" name="phone" placeholder="Phone number" required><br>
        <label for=""> </label><br>
        <input type="text" name="country" placeholder="Country" required><br>
        <label for=""> </label><br>
        <button>Create</button>
        <button><a href="/">Cancel</a></button>
    </form>

@endsection