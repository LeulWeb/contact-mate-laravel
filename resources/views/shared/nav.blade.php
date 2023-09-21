<nav>
    <h1>ContactMate</h1>

    @guest
        <a href="{{route('auth.register')}}">signup</a>
          <a href="{{route('login')}}">login</a>
    @endguest

    @auth
        <div>
            <p>Welcome <span>{{auth()->user()->name}}</span></p>
            <a href="{{route('auth.logout')}}">Logout Here</a>
        </div>
    @endauth
</nav>