<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('shared.nav')
    @if (session()->has('message'))
        <div class="p-4 text-white bg-green-500">
            <p>{{session('message')}}</p>
        </div>
    @endif
    @yield('content')
</body>
</html>