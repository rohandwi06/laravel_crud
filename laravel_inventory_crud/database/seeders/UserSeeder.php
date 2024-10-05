<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'rohan',
                'password' => bcrypt('rohan'),
                'id_role' => 1,
            ],
            [
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'id_role' => 2,
            ],
        ]);
    }
}
