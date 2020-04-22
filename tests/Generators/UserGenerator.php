<?php
/**
 * Description of UserGenerator.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace Tests\Generators;


use App\Models\User;

class UserGenerator
{

    public static function generateAdmin(array $data = []): User
    {
        return self::generate(array_merge($data, [
            'level' => User::LEVEL_ADMIN,
        ]));
    }

    public static function generate(array $data = []): User
    {
        return factory(User::class)->create($data);
    }

}
