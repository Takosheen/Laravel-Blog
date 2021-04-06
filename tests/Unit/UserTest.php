<?php
namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function Test_example()
    {
        $users = User::factory()->count(3)->create();
        $user = User::find(1);
        $user->name = "terence";
        $user->save();
    }
}
