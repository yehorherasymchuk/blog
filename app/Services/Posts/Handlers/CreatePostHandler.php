<?php
/**
 * Description of CreatePostHandler.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace App\Services\Posts\Handlers;


use App\Models\Post;
use App\Services\Posts\Repositories\PostRepositoryInterface;
use App\Services\Posts\Resolvers\PostUniqueSlugResolver;

class CreatePostHandler
{

    private PostUniqueSlugResolver $postUniqueSlugResolver;
    private PostRepositoryInterface $repository;

    public function __construct(
        PostUniqueSlugResolver $postUniqueSlugResolver,
        PostRepositoryInterface $repository
    ) {
        $this->postUniqueSlugResolver = $postUniqueSlugResolver;
        $this->repository = $repository;
    }

    public function handle(array $data): Post
    {
        $data['slug'] = $this->postUniqueSlugResolver->resolve($data);
        return $this->repository->createFromArray($data);
    }

}
