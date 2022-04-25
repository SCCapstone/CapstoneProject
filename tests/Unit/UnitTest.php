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

    public function test_same_roomnum() {
        $user1 = User::make([
            'house_num' => 3324
        ]);
        $user2 = User::make([
            'house_num' => 3324
        ]);
        $this->assertTrue($user1->house_num == $user2->house_num);
    }

}
