@extends('layout.app')


@section('content')
    <div class="container my-7">
        <div class="row">
            <div class="col-3">
                <div class=" overflow-hidden">
        <img src="{{ $contact->getImageUrl() }}" class="object-cover w-full" alt="">
    </div>
            </div>
            <div class="col-6 flex flex-col">
                <div class="flex-grow">
                     
                    <div class="flex space-x-3 items-center">
                        <p>Name</p>
                        <h2>{{ $contact->name }}</h2>
                    </div>
                    
                     <div class="flex space-x-3 items-center">
                         <p>Phone Number</p>
                         <p>{{ $contact->phone }}</p>
                     </div>
                     
                     <div class="flex space-x-3 items-center">
                        <p>Email Adress</p>
                        <p>{{ $contact->email ?  $contact->email: 'Empty'  }}</p>
                     </div>
                     
                     <div class="flex space-x-3 items-center">
                        <p>Website Link</p>
                        <p>{{ $contact->website ? $contact->website:"Empty" }}</p>
                     </div>
                
                     <div class="flex space-x-3 items-center">
                        <p>Relation</p>
                        <p>{{$contact->relation}}</p>
                     </div>
                     <div class="flex space-x-3 items-center">
                        <p>Note</p>
                         <p>{{ $contact->note ?  $contact->note: "Empty"  }}</p>
                     </div>
                     <div class="flex space-x-3 items-center">
                        <p>Birthday</p>
                        <p>{{ $contact->birthday ? $contact->birthday: "Empty" }}</p>
                     </div>
                </div>

                 <div class="flex  space-x-4">
        <a class="btn btn-primary" href="{{ route('contacts.edit', $contact->id) }}">Edit User</a>
        <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger">Delete Contact</button>
        </form>
    </div>
            </div>
        </div>
    </div>




   
    
@endsection
