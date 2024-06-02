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
        User::create([
            'name'     => 'ujang',
            'email'     => 'ujang@gmail.com',
            'foto'     => 'images/user.jpg',
            'password' => bcrypt('123456'),
            'verify_key' => 'hahahahah',
        ]);
    }
}
