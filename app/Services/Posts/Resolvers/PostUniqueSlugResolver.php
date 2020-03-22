<?php
/**
 * Description of PostUniqueSlugResolver.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace App\Services\Posts\Resolvers;


use Str;
use App\Services\Posts\Repositories\PostRepositoryInterface;

class PostUniqueSlugResolver
{

    private PostRepositoryInterface $repository;

    public function __construct(
        PostRepositoryInterface $repository
    ) {
        $this->repository = $repository;
    }

    public function resolve(array $data, ?int $id = null): string
    {
        $slug = $this->getSlugFromData($data);
        return $this->resolveUniqueSlug($slug, $data['locale'], $id);
    }

    private function getSlugFromData(array $data): string
    {
        if (empty($data['slug'])) {
            return Str::slug($data['title']);
        }
        return $data['slug'];
    }

    private function resolveUniqueSlug(string $slug, string $locale, ?int $id): string
    {
        if ($post = $this->repository->findBySlugAndLocale($slug, $locale)) {
            if ($post->id !== $id) {
                return $this->resolveUniqueSlug(
                    $this->addUniqueSuffix($slug),
                    $locale,
                    $id
                );
            }
        }
        return $slug;
    }

    private function addUniqueSuffix(string $slug): string
    {
        return $slug . '-' . microtime(true);
    }

}
