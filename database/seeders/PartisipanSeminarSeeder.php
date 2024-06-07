<?php

namespace Database\Seeders;

use App\Models\PartisipanSeminar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartisipanSeminarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partisipanseminar = [
            [
                'id_user' => 1,
                'id_seminar' => 1,
                'sertifikat' => 'test.png'
            ],
        ];
        PartisipanSeminar::insert($partisipanseminar);
    }
}
