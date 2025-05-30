<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Admin::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@dev.com',
            'password' => 'superadmin@dev.com',
            'role_id' => 1
        ]);
        $superAdmin->assignRole('Super Admin');

        $admin = Admin::create([
            'name' => 'Admin',
            'email' => 'admin@dev.com',
            'password' => 'admin@dev.com',
            'role_id' => 2
        ]);
        $admin->assignRole('Admin');

        Admin::create([
            'name' => 'Test Admin',
            'email' => 'test@dev.com',
            'password' => 'test@dev.com',
        ]);
    }
}
