@extends('layout.app')

@section('content')
    <h2>Welcome to Contact</h2>
    <p>Place where you will get in touch</p>


    <form action="{{route('auth.register')}}" method="post">
        @csrf
        <input type="text" placeholder="Jhon Doe" name="name">
        @error('name')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="email" placeholder="jhondoe@email.com" name="email">
        @error('email')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="password"  name="password">
        <br>
        <input type="password"  name="password_confirmation">
        @error('password')
        <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <button class="">Register Here</button>
    </form>
@endsection