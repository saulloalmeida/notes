<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
     <ul>
         <li><a href="{{route('note.index')}}">Index</a></li>
         <li><a href="{{route('note.show', ['note' => '1'])}}">Show</a></li>
     </ul>
    {{$slot}}
</body>
</html>
