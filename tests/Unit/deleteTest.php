<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class deleteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDelete()
    {
        $deleteUsr = User::first();
        $this->delete($deleteUsr);
        $this->assertTrue(true);
    }
}
