@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <h1 class="text-lg text-center py-4 font-bold ">Create new contact</h1>
                <form enctype="multipart/form-data"  action="{{route('contacts.store')}}" method="post">
        @csrf
        <input type="file" class="form-control"  name="profile" placeholder="Profile Picture">
        @error('profile')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="text"  class="form-control"   value="{{old('name')}}"  name="name" placeholder="name">
        @error('name')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="text"   class="form-control"   value="{{old('phone')}}"  name="phone" placeholder="09879....">
         @error('phone') 
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="email"  class="form-control"   value="{{old('email')}}"  name="email" placeholder="your@email.com">
         @error('email')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="url"  class="form-control"   value="{{old('website')}}"   name="website" placeholder="website">
         @error('website')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <input type="date"   class="form-control"   value="{{old('birthday')}}"  name="birthday" id="">
         @error('birthday')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        <textarea  class="form-control"   name="note" id="note" cols="30" rows="10">{{old('note')}}</textarea>
         @error('note')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
        <br>
        
        <div class="input-group">
            <label class="input-group-text"  for="relation">
            relation:
        </label>
            <input class="form-check-input m-2"  type="radio" name="relation" value="friend">Friend
            <input class="form-check-input m-2"   type="radio" name="relation" value="family">family
            <input class="form-check-input m-2"   type="radio" name="relation" value="coworker">Coworker
            <input class="form-check-input m-2"   type="radio" name="relation" value="relative">Relative
            <input class="form-check-input m-2"   type="radio" name="relation" value="other" checked>Other
        </div>
         @error('relation')
            <p class="text-sm text-red-500">{{$message}}</p>
        @enderror

        <br>
        <button class="btn btn-primary w-full my-3">Save contact</button>
    </form>
        </div>
    </div>
</div>
@endsection