<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout</title>
</head>
<body>
    <h1>layout Home Page</h1>
    <p>{{ $title ?? 'Todo Manager' }}</p>
<a href="/about"> About </a>
{{ $slot }}
         <div class="container">
            @yield('content')
        </div>
</body>
</html>