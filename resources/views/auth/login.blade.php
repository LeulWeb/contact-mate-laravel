@extends('layout.app')

@section('content')
    <div class="container my-7">
        <div class="row">
            <div class="col-4 offset-4">
                <h2 class="text-2xl font-bold text-center">Login Here</h2>
    <p class="text-xl italic py-3 text-center">Place where you will get in touch</p>


    <form action="{{route('login')}}" method="post">
        @csrf
        <input type="email" class="form-control my-3"  placeholder="jhondoe@email.com" name="email">
        @error('email')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
     
        <input class="form-control" type="password"  placeholder="*******"  name="password">
         @error('password')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
     


        <button class="btn mt-4  w-full btn-primary">Login</button>
    </form>

        <div class="flex space-x-3 mt-3 ">
            <p>New to contact mate</p> <a class="text-primary"  href="{{route('auth.register')}}">Register</a>
        </div>
            </div>
        </div>
    </div>
@endsection