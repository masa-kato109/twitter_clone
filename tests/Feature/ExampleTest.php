<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this -> get('/')->assertOK();
        $this -> get('/login')->assertOK();     
        $this -> get('/register')->assertOK();     
        $this -> get('/notexist')->assertStatus(404);
    }
}
