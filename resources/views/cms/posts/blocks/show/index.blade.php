<?php /** @var \App\Models\Post $post */ ?>
<h1 class="display-4">{{ $post->title }}</h1>
<p class="lead">
    {{ $post->excerpt }}
</p>
<p class="text-justify">{{ $post->slug }}</p>
<p class="text-justify">{{ $post->body }}</p>
