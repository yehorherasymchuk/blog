<div class="jumbotron">
    <h1 class="display-4">@lang('cms.posts.posts') ({{ \App\Models\Post::count() }})</h1>
    <hr class="my-4">
    <a class="btn btn-primary btn-lg" href="{{ route('cms.posts.create') }}" role="button">
        @lang('cms.create')
    </a>
</div>
