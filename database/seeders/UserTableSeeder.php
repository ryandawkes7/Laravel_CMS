<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Regular user details
        $user = new User;
        $user->name = "Testing Admin";
        $user->email = "admin@email.com";
        $user->password = bcrypt('password123');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());

        // Admin user details
        $admin = new User;
        $admin->name = "Testing Regular";
        $admin->email = "regular@email.com";
        $admin->password = bcrypt('password123');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());

    }
}
