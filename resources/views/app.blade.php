<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>
<body class="bg-white text-black antialiased bg-gray-950 text-white p-4">
  
<header class="container mx-auto flex items-center justify-between py-10 border-b-2 border-solid mb-8">

  <div class="mb-6">
    <a href="{{route('home')}}">
      <div class="text-center">
        <div class="mr-3"><span class="text-3xl">Héctor Nevado<span><br/><span class="text-2xl text-green-500 font-extrabold">PHP Developer</span></div>
      </div>
    </a>
   </div>
    <div class="flex items-center leading-4 space-x-4 sm:space-x-6">
      <a class="bg-green-500 p-4 rounded-2xl font-extrabold block font-medium text-gray-900 dark:text-gray-100" href="#">Contacto</a>
    </div>

</header>

  <div class="divide-y divide-gray-200 dark:divide-gray-700">
    
  <div class="container mx-auto space-y-2 pb-8 pt-6 md:space-y-5">
  
     @if(request()->routeIs(['page.category', 'page.tag','page.thread']))

        <div class="mb-6"><a href="{{ route('home') }}"> &lt; VOLVER AL HOME</a></div>

       @endif

       <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 text-green-500 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
            @yield('title')
        </h1>
        
        <p class="text-lg leading-7">@yield('description')</p>

   </div>

  </div>


  <div class="container mx-auto mt-4">
        @yield('content')
  </div>

</body>
</html>