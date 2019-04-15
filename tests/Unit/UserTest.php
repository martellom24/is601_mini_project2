<?php

namespace Tests\Unit;

use phpDocumentor\Reflection\Types\Array_;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * test User table
     *
     * @return void
     */
    public function testInsertUser()
    {
        factory(User::class)->create();

        $this->assertDatabaseHas('users', ['name' => 'Mr. Eleazar Schulist']);
    }
}
