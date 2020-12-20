<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed for normal user
        $role_regular_user = new Role;
        $role_regular_user->name = 'user';
        $role_regular_user->description = 'A Regular User';
        $role_regular_user->save();

        // Seed for admin user
        $role_regular_user = new Role;
        $role_regular_user->name = 'admin';
        $role_regular_user->description = 'An Admin User';
        $role_regular_user->save();
    }
}
