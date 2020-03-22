<table class="table table-striped">
    @include('cms.posts.blocks.list.header')
    <tbody>
        @each('cms.posts.blocks.list.item', $posts, 'post')
    </tbody>
</table>
