<body>
<article>
{{-- <span><?= $post->published_at;?></span> --}}
<span>{{ $post->published_at }}</span>
{{-- <h1><?= $post->title; ?></h1> --}}
<h1>{!! $post->title !!}</h1>
<div>
    <p>
        <?= $post->body; ?>
        <br />
        {{ $post->body }}
    </p>
</div>

</article>
</body>


