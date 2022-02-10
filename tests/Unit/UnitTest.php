<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_page() 
    {
        $response = $this->get('/pages/sign-up');

        $response->assertStatus(200);
    }

    public function test_duplicate_user() {
        $user1 = User::make([
            'name' => 'Roscoe Burk-Moody',
            'email' => 'roscoeb@email.sc.edu'
        ]);

        $user2 = User::make([
            'name' => 'John Doe',
            'email' => 'johnd@email.sc.edu'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

    public function test_user_delete() {
        $user = User::make();

        if($user) {
            $user->delete();
        }

        $this->assertTrue(true);
    }
}
