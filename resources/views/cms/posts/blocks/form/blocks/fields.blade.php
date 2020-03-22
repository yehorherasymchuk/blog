<div class="form-row">
    <div class="form-group col-md-6">
        {{ Form::label('title', __('cms.posts.title')) }}
        {{ Form::text('title', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group col-md-6">
        @php
            $statuses = [
                \App\Models\Post::STATUS_DRAFT => __('cms.posts.statuses.' . \App\Models\Post::STATUS_DRAFT),
                \App\Models\Post::STATUS_PUBLISHED => __('cms.posts.statuses.' . \App\Models\Post::STATUS_PUBLISHED),
            ];
        @endphp
        {{ Form::label('status', __('cms.posts.title')) }}
        {{ Form::select('status', $statuses, null, ['class' => 'form-control']) }}
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        {{ Form::label('excerpt', __('cms.posts.excerpt')) }}
        {{ Form::text('excerpt', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group  col-md-12">
        {{ Form::label('body', __('cms.posts.body')) }}
        {{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => 20,]) }}
    </div>
</div>
