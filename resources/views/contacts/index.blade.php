@extends('layout.app')


@section('content')




@include('shared.search')

<table class="table">
    <thead>
        <tr>
            <th scope="col">profile</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
      @forelse ($contactList as $contact)
    @include('shared.table')
    @empty
    <div>
        <p>Ther are no contacts yet</p>
    </div>
    @endforelse
</tbody>
</table>
    


    <div>
        {{$contactList->links()}}
    </div>
@endsection