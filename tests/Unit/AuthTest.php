<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_create_posts()
    {
        $user = factory(User::class)->create();
        $this->be($user);
        $this->post(route('post.store'), [
            'title' => 'test',
            'user_id' => $user->id,
        ]);

        $this->assertDatabaseHas('posts', [
            'title' => 'test',
            'user_id' => $user->id,
        ]);
    }
}
