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
<body>
  
  <div class="bg-gray-200 py-16">
    <div class="container px-4 mx-auto">
       @if(request()->routeIs(['page.category', 'page.tag','page.thread']))

        <div class="mb-6"><a href="{{ route('home') }}"> &lt; VOLVER AL HOME</a></div>

       @endif
        <h2 class="text-6xl mb-4">
            @yield('title')
        </h2>
        <p class="text-lg font-light leading-loose mx-w-3xl">@yield('description')</p>
    </div>
  </div>


  <div class="container px-4 mx-auto mt-12">
        @yield('content')
  </div>

</body>
</html>