<?php
/**
 * Description of PostGenerator.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace Tests\Generators;


use App\Models\Post;

class PostGenerator
{

    public static function generateWithAuthor(array $data = []): Post
    {
        $data = array_merge($data, [
           'author_id' => UserGenerator::generate()->id,
        ]);
        return self::generate($data);
    }

    public static function generate(array $data = []): Post
    {
        return factory(Post::class)->create($data);
    }
}
