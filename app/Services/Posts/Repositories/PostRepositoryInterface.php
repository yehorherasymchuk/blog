<?php
/**
 * Description of PostRepositoryInterface.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace App\Services\Posts\Repositories;


use App\Models\Post;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface PostRepositoryInterface
{

    public function find(int $id): ?Post;

    public function findBySlugAndLocale(string $slug, string $locale);

    public function search(array $filters): LengthAwarePaginator;

    public function createFromArray(array $data): Post;

    public function updateFromArray(Post $model, array $data): Post;

    public function delete(Post $model);

}
