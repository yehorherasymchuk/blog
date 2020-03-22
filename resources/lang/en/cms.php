<?php

return [
    'cms' => 'CMS',
    'create' => 'Create',
    'posts' => [
        'posts' => 'Posts',
        'status' => 'Status',
        'title' => 'Title',
        'locale' => 'Locale',
        'slug' => 'Slug',
        'author' => 'Author',
        'updated' => 'Updated',
        'statuses' => [
            \App\Models\Post::STATUS_DRAFT => 'Draft',
            \App\Models\Post::STATUS_PUBLISHED => 'Published',
        ]
    ],
];
