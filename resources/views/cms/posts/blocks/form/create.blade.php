{!! Form::open(['url' => route('cms.posts.store')]) !!}
    @include('cms.posts.blocks.form.blocks.fields')
    {!! Form::submit(__('cms.create'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
