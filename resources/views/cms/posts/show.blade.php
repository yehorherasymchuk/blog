@extends('layouts.app')

@section('content')
    @php
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
    @include('cms.posts.blocks.show.index')
@endsection
