<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create user admin example with role super admin and admin
        $superAdmin = \App\Models\User::factory()->create([
            'name' => 'super admin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin = \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678'),
        ]);

        $superAdmin->assignRole('super admin');
        $admin->assignRole('admin');
    }
}