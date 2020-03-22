<?php /** @var \App\Models\Post $post */ ?>

<tr>
    <th scope="row">{{ $post->id }}</th>
    <td>@lang('cms.posts.statuses.' . $post->status)</td>
    <td>{{ $post->title }}</td>
    <td>{{ $post->locale }}</td>
    <td>{{ $post->slug }}</td>
    <td>{{ $post->author->name }}</td>
    <td>{{ $post->updated_at->format('Y.m.d') }}</td>
    <td>
        {{ link_to(route('cms.posts.edit', ['post' => $post->id]), __('cms.update')) }}
    </td>
</tr>
