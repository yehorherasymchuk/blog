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
            [
                'url' => route('cms.posts.create'),
                'title' => __('cms.create'),
            ],
        ];
    @endphp
    @include('cms.blocks.breadcrumbs.index', ['breadcrumbs' => $breadcrumbs])
    @include('cms.posts.blocks.header.create')
    @include('cms.posts.blocks.form.create')

@endsection
