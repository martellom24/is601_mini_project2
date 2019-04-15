<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UpdateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserUpdate()
    {
        $data['name'] = 'Steve Smith';
        $user = User::first();
        $user->update($data);
        $this->assertInstanceOf(User::class, $user);
        $this->assertTrue(true);
    }
}
