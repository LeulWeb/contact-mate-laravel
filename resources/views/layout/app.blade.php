<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

  {{-- bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  <style>
    body{
        font-family: 'Handlee', cursive;
    }

  </style>
</head>
<body class="flex flex-col min-h-screen">
    
        @include('shared.nav')
    
   <div class="main  flex-grow h-full w-10/12 mx-auto items-center justify-center ">
    <div>
         @if (session()->has('message'))
        <div class="p-4 text-white bg-green-500">
            <p>{{session('message')}}</p>
        </div>
    @endif
    @yield('content')
    </div>
   </div>
    <footer class="bg-black text-white text-center  py-3">
        <p>copyright|2015E.C <b>leulwebsdev@gmail.com</b></p>
    </footer>
</body>
</html>