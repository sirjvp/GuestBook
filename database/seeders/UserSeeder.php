<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Henry Admin';
        $user->email = 'henryadmin@kecepeten.com';
        $user->password = 'aaa1';
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->name = 'Henry Creator';
        $user->email = 'henrycreator@kecepeten.com';
        $user->password = 'aaa2';
        $user->role_id = 2;
        $user->save();

        $user = new User();
        $user->name = 'Henry Guest';
        $user->email = 'henryguest@kecepeten.com';
        $user->password = 'aaa3';
        $user->role_id = 3;
        $user->save();
    }
}
