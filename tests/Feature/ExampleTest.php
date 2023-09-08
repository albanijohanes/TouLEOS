<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_customer_can_register()
    {
        $response = $this->post(route('register'), [
            'nama' => $this->faker->name,
            'no_hp' => $this->faker->phoneNumber,
            'password' => 'password',
            'password_confirmation' => 'password',
            'role' => 'customer,'
        ]);

        $response->assertRedirect(route('logincustomer'));
        $this->assertDatabaseCount('users', 1);
    }
}
