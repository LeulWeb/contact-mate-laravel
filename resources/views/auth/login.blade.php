@extends('layout.app')

@section('content')
    <h2>Login Here</h2>
    <p>Place where you will get in touch</p>


    <form action="{{route('login')}}" method="post">
        @csrf
        <input type="email" placeholder="jhondoe@email.com" name="email">
        @error('email')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="password"  name="password">
         @error('password')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <button class="">Login</button>
    </form>
@endsection