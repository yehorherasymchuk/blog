<?php
/**
 * Description of EloquentPostRepository.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace App\Services\Posts\Repositories;


use App\Models\Post;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class EloquentPostRepository implements PostRepositoryInterface
{

    public function find(int $id): ?Post
    {
        return Post::find($id);
    }
    public function findBySlugAndLocale(string $slug, string $locale): ?Post
    {
        return Post::query()->whereSlug($slug)
            ->whereLocale($locale)
            ->first();
    }

    public function search(array $filters): LengthAwarePaginator
    {
        return Post::paginate();
    }

    public function createFromArray(array $data): Post
    {
        return Post::create($data);
    }

    public function updateFromArray(Post $model, array $data): Post
    {
        $model->update($data);
        return $model;
    }

    public function delete(Post $model)
    {
        $model->delete();
    }

}
