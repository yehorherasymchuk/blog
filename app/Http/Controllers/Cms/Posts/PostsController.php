<?php

namespace App\Http\Controllers\Cms\Posts;


use View;
use App\Http\Controllers\Cms\Posts\Requests\StorePostRequest;
use App\Http\Controllers\Cms\Posts\Requests\UpdatePostRequest;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\Posts\PostsService;

class PostsController extends Controller
{

    private PostsService $postsService;


    public function __construct(
        PostsService $postsService
    )
    {
        $this->postsService = $postsService;
    }

    public function index()
    {
        View::share([
            'posts' => $this->postsService->search([]),
        ]);

        return view('cms.posts.index');
    }

    public function create()
    {
        return view('cms.posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $post = $this->postsService->create($request->getFormData());
        return redirect()->route('cms.posts.show', [
            'post' => $post->id,
        ]);
    }

    public function show(Post $post)
    {
        View::share([
            'post' => $post,
        ]);
        return view('cms.posts.show');
    }

    public function edit(Post $post)
    {
        View::share([
            'post' => $post,
        ]);
        return view('cms.posts.edit');
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post = $this->postsService->update($post, $request->getFormData());
        return redirect()->route('cms.posts.show', [
            'post' => $post->id,
        ]);
    }

    public function destroy(Post $post)
    {
        $this->postsService->delete($post);
        return redirect()->route('cms.posts.index');
    }
}
