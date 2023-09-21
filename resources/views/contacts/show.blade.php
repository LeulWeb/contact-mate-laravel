@extends('layout.app')


@section('content')
    <hr>

    <div class="flex">
        <a href="{{route('contacts.edit', $contact->id)}}">Edit User</a>
         <form action="{{route('contacts.destroy', $contact->id)}}" method="post">
            @csrf
            @method('delete')
            <button>Delete Contact</button>
         </form>
    </div>
    <div class="h-32 w-32 rounded-full overflow-hidden">
        <img src="{{$contact->getImageUrl()}}" class="object-cover w-full"  alt="">
    </div>
    <h2>{{$contact->name}}</h2>
    <p>{{$contact->phone}}</p>
    <p>{{$contact->email}}</p>
    <p>{{$contact->website}}</p>
    <p>{{$contact->relation}}</p>
    <p>{{$contact->note}}</p>
    <p>{{$contact->birthday}}</p>
    

@endsection