<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background:#b00303;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="/css/app.css" rel="stylesheet">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:ital,wght@0,300;0,400;0,700;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>

            body {
                font-family: 'Sofia Sans', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

       <h1>Initial Text Regonition</h1>

       @foreach($posts as $post)

       <article>
       <a href="/posts/{{ $post->slug }}">
        <h1>{{ $post->title }}</h1></a>
        <p><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a>
        <div>
        <span>{{ $post->published_at}}</span>
        <br />
        {!! $post->excerpt !!}
        </div>
       </article>
       @endforeach

    </body>
</html>
