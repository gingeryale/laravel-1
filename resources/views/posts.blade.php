<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="app.css" rel="stylesheet">
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
       <article>
        <a href="/posts/my-first-post"><h1>my first post</h1></a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis esse odio molestias adipisci doloribus expedita architecto odit nostrum reprehenderit? Voluptatum id voluptas amet totam, vero earum fugiat. Explicabo, cupiditate quasi.</p>
       </article>
       <article>
        <a href="/posts/my-second-post"><h1>my second post</h1></a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis esse odio molestias adipisci doloribus expedita architecto odit nostrum reprehenderit? Voluptatum id voluptas amet totam, vero earum fugiat. Explicabo, cupiditate quasi.</p>
       </article>
    </body>
</html>
