<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jenjang;

class JenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenjang = [
            [
                'nama_jenjang' => 'Raudaltul Athfal',
            ],
            [
                'nama_jenjang' => 'Madrasah Ibtidaiyah',
            ],
            [
                'nama_jenjang' => 'Madrasah Tsanawiyah',
            ],
            [
                'nama_jenjang' => 'Madrasah Aliyah',
            ],
        ];

        Jenjang::insert($jenjang);
    }
}
