@extends('layout.app')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-6 offset-3">
                <h1 class=" my-3 text-center text-2xl font-bold">Edit Contact</h1>
                <form enctype="multipart/form-data" action="{{ route('contacts.update', $contact->id) }}" method="post">
                    @csrf
                    @method('put')
                    <input class="form-control" type="file" name="profile" placeholder="Profile Picture">
                    @error('profile')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <br>
                    <input class="form-control" type="text" value="{{ $contact->name }}" name="name"
                        placeholder="name">
                    @error('name')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <br>
                    <input class="form-control" type="text" value="{{ $contact->phone }}" name="phone"
                        placeholder="09879....">
                    @error('phone')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <br>
                    <input class="form-control" type="email" value="{{ $contact->email }}" name="email"
                        placeholder="your@email.com">
                    @error('email')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <br>
                    <input class="form-control" type="url" value="{{ $contact->website }}" name="website"
                        placeholder="website">
                    @error('website')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <br>
                    <input class="form-control" type="date" value="{{ $contact->birthday }}" name="birthday"
                        id="">
                    @error('birthday')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <br>
                    <textarea class="form-control"  name="note" id="note" cols="30" rows="10">{{ $contact->node }}</textarea>
                    @error('note')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    <br>

                    <label for="relation">
                        relation:
                        <input type="radio" name="relation" value="friend"
                            {{ $contact->relation == 'friend' ? 'checked' : '' }}>Friend
                        <input type="radio" name="relation" value="family"
                            {{ $contact->relation == 'family' ? 'checked' : '' }}>family
                        <input type="radio" name="relation" value="coworker"
                            {{ $contact->relation == 'coworker' ? 'checked' : '' }}>Coworker
                        <input type="radio" name="relation" value="relative"
                            {{ $contact->relation == 'relative' ? 'checked' : '' }}>Relative
                        <input type="radio" name="relation" value="other"
                            {{ $contact->relation == 'other' ? 'checked' : '' }}>Other
                    </label>
                    @error('relation')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror

                    <br>
                    <button class="btn btn-primary my-3 w-full">Update contact</button>
                </form>
            </div>
        </div>
    </div>
@endsection
