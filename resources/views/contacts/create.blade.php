@extends('layout.app')

@section('content')
<h1>Create new contact</h1>
    <form enctype="multipart/form-data"  action="{{route('contacts.store')}}" method="post">
        @csrf
        <input type="file" name="profile" placeholder="Profile Picture">
        @error('profile')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="text" value="{{old('name')}}"  name="name" placeholder="name">
        @error('name')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="text"  value="{{old('phone')}}"  name="phone" placeholder="09879....">
         @error('phone') 
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="email"   value="{{old('email')}}"  name="email" placeholder="your@email.com">
         @error('email')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="url"   value="{{old('website')}}"   name="website" placeholder="website">
         @error('website')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="date"   value="{{old('birthday')}}"  name="birthday" id="">
         @error('birthday')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <textarea name="note" id="note" cols="30" rows="10">{{old('note')}}</textarea>
         @error('note')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        
        <label for="relation">
            relation:
            <input type="radio" name="relation" value="friend">Friend
            <input type="radio" name="relation" value="family">family
            <input type="radio" name="relation" value="coworker">Coworker
            <input type="radio" name="relation" value="relative">Relative
            <input type="radio" name="relation" value="other" checked>Other
        </label>
         @error('relation')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror

        <br>
        <button>Save contact</button>
    </form>
@endsection