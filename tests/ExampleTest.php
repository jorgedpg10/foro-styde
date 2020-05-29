<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $name = 'Jorge Peralta';

        $user = factory(\App\User::class)->create([
            'name' => $name
        ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see($name);
    }
}
