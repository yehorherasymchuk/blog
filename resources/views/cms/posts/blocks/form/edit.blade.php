{!! Form::model($post, ['url' => route('cms.posts.update', ['post' => $post->id]), 'method' => 'PATCH']) !!}
    @include('cms.posts.blocks.form.blocks.fields')
    {!! Form::submit(__('cms.update'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
