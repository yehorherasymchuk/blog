@extends('layouts.app')

@section('content')
    @php
        App::setLocale('ru');
        App::setLocale('ru');
        $breadcrumbs = [
            [
                'url' => route('cms.posts.index'),
                'title' => __('cms.cms'),
            ],
            [
                'url' => route('cms.posts.index'),
                'title' => __('cms.posts.posts'),
            ],
        ];
    @endphp
    @include('cms.blocks.breadcrumbs.index', ['breadcrumbs' => $breadcrumbs])
    @include('cms.posts.blocks.header.list')
    @include('cms.posts.blocks.list.index')
@endsection
