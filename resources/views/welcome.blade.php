<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<x-layout>
    <h2>old home page</h2>

    <x-slot:title>
        Custom Title
    </x-slot>

    @section('content')
         <p>This is my body content.</p>
    @endsection


   
</x-layout>
</body>
</html>