<div class="flex space-x-4 my-4">

<a class="btn btn-primary"  href="{{route('contacts.create')}}">New Contact</a>
<form class="input-group" action="{{route('contacts.index',)}}">
    <input class="form-control form-group-item" type="search" name="keyword" id="keyword">
    <button class="btn btn-success">Search</button>
</form>
</div>