<?php
/**
 * Description of PostsService.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace App\Services\Posts;


use App\Models\Post;
use App\Services\Posts\Handlers\CreatePostHandler;
use App\Services\Posts\Handlers\UpdatePostHandler;
use App\Services\Posts\Repositories\PostRepositoryInterface;

class PostsService
{

    private CreatePostHandler $createPostHandler;
    private UpdatePostHandler $updatePostHandler;
    private PostRepositoryInterface $repository;

    /**
     * PostsService constructor.
     * @param CreatePostHandler $createPostHandler
     * @param UpdatePostHandler $updatePostHandler
     * @param PostRepositoryInterface $repository
     */
    public function __construct(
        CreatePostHandler $createPostHandler,
        UpdatePostHandler $updatePostHandler,
        PostRepositoryInterface $repository
    ) {

        $this->createPostHandler = $createPostHandler;
        $this->updatePostHandler = $updatePostHandler;
        $this->repository = $repository;
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }

    public function search(array $filters)
    {
        return $this->repository->search($filters);
    }

    public function create(array $data)
    {
        return $this->createPostHandler->handle($data);
    }

    public function update(Post $model, array $data)
    {
        return $this->updatePostHandler->handle($model, $data);
    }

    public function delete(Post $model)
    {
        return $this->repository->delete($model);
    }

}
