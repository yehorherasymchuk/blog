<?php

return [
    'cms' => 'CMS',
    'create' => 'Create',
    'update' => 'Update',
    'posts' => [
        'posts' => 'Посты',
        'status' => 'Status',
        'title' => 'Title',
        'locale' => 'Locale',
        'slug' => 'Slug',
        'excerpt' => 'Excerpt',
        'body' => 'Body',
        'author' => 'Author',
        'updated' => 'Updated',
        'statuses' => [
            \App\Models\Post::STATUS_DRAFT => 'Draft',
            \App\Models\Post::STATUS_PUBLISHED => 'Published',
        ]
    ],
];
