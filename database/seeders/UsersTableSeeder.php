<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'username' => 'pauloeremita@gmail.com',
                    'password' => bcrypt('qwerty.123'),
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'username' => 'kirk@gmail.com',
                    'password' => bcrypt('qwerty.123'),
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'username' => 'mccoy@gmail.com',
                    'password' => bcrypt('qwerty.123'),
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'username' => 'spock@gmail.com',
                    'password' => bcrypt('qwerty.123'),
                    'created_at' => date('Y-m-d H:i:s')
                ],
            ]
        );
    }
}
