<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>articles</title>
        <body>
           <h1>liste de titre</h1>
            
        @foreach($posts as $post)
            <h2>{{ $post }}</h2>
            
        @endforeach

        <a href="{{route('article')}}">lien</a>
        </body>