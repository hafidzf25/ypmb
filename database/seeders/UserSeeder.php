<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [[
            'name'     => 'ujang',
            'email'     => 'ujang@gmail.com',
            'foto'     => 'images/user.jpg',
            'password' => bcrypt('123456'),
            'verify_key' => 'hahahahah',
        ],
        [
            'name'     => 'Legi Kuswandi',
            'email'     => 'legikuswandi@gmail.com',
            'foto'     => 'images/user.jpg',
            'password' => bcrypt('123456'),
            'verify_key' => 'hahahahah',
        ],
        [
            'name'     => 'Muhammad Iqbal Fadhillah',
            'email'     => 'iqbal@gmail.com',
            'foto'     => 'images/user.jpg',
            'password' => bcrypt('123456'),
            'verify_key' => 'hahahahah',
        ],
        [
            'name'     => 'Muhammad Rifky Afandi',
            'email'     => 'iki@gmail.com',
            'foto'     => 'images/user.jpg',
            'password' => bcrypt('123456'),
            'verify_key' => 'hahahahah',
        ],
        [
            'name'     => 'Fahmi Rasyid Aflah',
            'email'     => 'fahmi@gmail.com',
            'foto'     => 'images/user.jpg',
            'password' => bcrypt('123456'),
            'verify_key' => 'hahahahah',
        ]];

        User::insert($user);
    }
}
