<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserCountTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $rowCount = count(User::get());
        $UserCount = $rowCount;
        $this->countOf($UserCount);
        $this->assertTrue(true);
    }
}
