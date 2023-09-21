@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
               <div class="py-7 text-center">
                 <h2 class="text-2xl font-bold">Welcome to Contact</h2>
    <p>Place where you will get in touch</p>
               </div>


    <form action="{{route('auth.register')}}" method="post">
        @csrf
        <input type="text" class="form-control"  placeholder="Jhon Doe" name="name">
        @error('name')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="email" class="form-control"   placeholder="jhondoe@email.com" name="email">
        @error('email')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="password" class="form-control"  placeholder="password"  name="password">
        <br>
        <input type="password" class="form-control" placeholder="password"  name="password_confirmation">
        @error('password')
        <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <button class="btn btn-primary w-full py-2">Register Here</button>
    </form>
    <div class="flex space-x-3 mt-3 ">
            <p>Already in contact mate</p> <a class="text-primary"  href="{{route('login')}}">Login</a>
        </div>
            </div>
        </div>
    </div>
@endsection