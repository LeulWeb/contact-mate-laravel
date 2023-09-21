<nav class="bg-black text-white">
   <div class="flex justify-between  items-center w-10/12 mx-auto py-3">
     <h1 class="text-2xl font-bold ">
        <a href="{{route('contacts.index')}}">ContactMate</a>
     </h1>

    @guest
        <div class="flex items-center space-x-3 text-xl">
            <a href="{{route('auth.register')}}">signup</a>
          <a href="{{route('login')}}">login</a>
        </div>
    @endguest

    @auth
        <div class="flex space-x-3 items-center">
            <p>Welcome <span>{{auth()->user()->name}}</span></p>
            <a class="px-3 rounded-2xl bg-red-500 text-white" href="{{route('auth.logout')}}">Logout</a>
        </div>
    @endauth
   </div>
</nav>