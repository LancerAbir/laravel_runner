<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Learning</title>
</head>
<body>

<x-app-layout> 
    <h3>This is About Page </h3>
    <a href="/">Back Home Page</a><br />
    Hello, {{$name}}.<br />
    The current UNIX timestamp is {{ date('l jS \of F Y h:i:s A') }}.
</x-app-layout>

</body>
</html>   