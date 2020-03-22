<?php
/**
 * Description of PostsService.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace App\Services\Posts;


use App\Models\Post;
use App\Services\Posts\Repositories\PostRepositoryInterface;

class PostsService
{

    private PostRepositoryInterface $repository;

    public function __construct(
        PostRepositoryInterface $repository
    ) {
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
        return $this->repository->createFromArray($data);
    }

    public function update(Post $model, array $data)
    {
        return $this->repository->updateFromArray($model, $data);
    }

    public function delete(Post $model)
    {
        return $this->repository->delete($model);
    }

}
