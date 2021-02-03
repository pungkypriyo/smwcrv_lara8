<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat data dummy users
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'johndoe@hotmail.com',
                'user_role' => '1',
                'username' => 'graces',
                'password' => bcrypt('12344321'),
            ],
            [
                'name' => 'Regular User',
                'email' => 'reguser@gmail.com',
                'user_role' => '2',
                'username' => '2',
                'password' => bcrypt('07070707'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
