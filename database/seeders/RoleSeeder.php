<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'Admin';
        $role->description = "Web Admin";
        $role->save(); #admin

        $role = new Role();
        $role->name = 'Creator';
        $role->description = "Event Creator";
        $role->save(); #creator

        $role = new Role();
        $role->name = 'User';
        $role->description = "Normal User";
        $role->save(); #user
    }
}
