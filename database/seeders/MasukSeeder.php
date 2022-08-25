<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'is_admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'is_user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123'),
            ]
        ];
        foreach ($user as $u) {
            User::create($u);
        }
    }
}
