@extends('layout.app')


@section('content')
    <h1>Contacts</h1>
<hr>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui velit, distinctio vitae maiores consequatur doloribus</p>
<a href="{{route('contacts.create')}}">New Contact</a>



@include('shared.search')

@forelse ($contactList as $contact)
    <div>
        {{-- @dd($contact->getImageUrl()) --}}
        <div class="flex items-center space-x-4 py-4">
            <div class="h-16 w-16 rounded-full overflow-hidden">
               
            <img src="{{$contact->getImageUrl()}}" alt="" class="w-full object-cover">
        </div>
        <div>
            <a href="{{route('contacts.show', $contact->id)}}">
            <p>{{$contact->name}}</p>
            <p>{{$contact->phone}}</p>
        </a>

        </div>
        </div>
    </div>


    @empty
    <div>
        <p>Ther are no contacts yet</p>
    </div>
    @endforelse
    <div>
        {{$contactList->links()}}
    </div>
@endsection