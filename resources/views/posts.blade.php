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

       <?php foreach($posts as $post):?>

       <article>
       <a href="/posts/<?= $post->slug;?>">
        <h1><?= $post->title; ?></h1></a>
        <div>
        <?= $post->body; ?>
        </div>
       </article>
       <?php endforeach;?>

    </body>
</html>
