<?php
/**
 * Description of PostsControllerTest.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace Tests\Feature\Http\Controllers\Cms\Posts;


use Tests\Generators\PostGenerator;
use Tests\Generators\UserGenerator;
use Tests\TestCase;

class PostsControllerTest extends TestCase
{

    public function testIndexAllowAdmins()
    {
        $user = UserGenerator::generateAdmin();
        $this->actingAs($user)->get(route('cms.posts.index'))
            ->assertStatus(200);
    }

    public function testIndexNotAllowNotSignedUsers()
    {
        $this->get(route('cms.posts.index'))
            ->assertStatus(302)
            ->assertRedirect(route('login'));
    }

    public function testIndexShowPosts()
    {
        $user = UserGenerator::generateAdmin();
        $post = PostGenerator::generateWithAuthor();
        $this->actingAs($user)->get(route('cms.posts.index'))
            ->assertStatus(200)
            ->assertSeeText($post->title);
    }

}
