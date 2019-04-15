<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ResponseTest extends TestCase
{
    /**
     * A feature test for Login Page.
     *
     * @return void
     */
    public function testLoginPage()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    /**
     * A feature test for Register Page.
     *
     * @return void
     */
    public function testRegisterPage()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    /**
     * A feature test for About Page.
     *
     * @return void
     */
    public function testAboutPage()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    /**
     * A feature test for Contact Page.
     *
     * @return void
     */
    public function testContactPage()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
