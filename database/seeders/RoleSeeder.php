<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $roles = [
            [
                'role' => 'User',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'role' => 'Admin',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}
