<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <div>
        <h2>@yield('title')</h2>
        <p>@yield('description')</p>
    </div>

    <div>
        @yield('content')
    </div>
</body>
</html>