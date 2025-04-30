<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            1 => 'Super Admin',
            2 => 'Admin',
        ];

        foreach ($roles as $id => $role) {
            Role::create([
                'id' => $id,
                'name' => $role,
                'guard_name' => 'admin'
            ]);
        }
    }
}
