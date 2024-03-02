<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelatihan;

class PelatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pelatihan = [
            [
                'nama_pelatihan' => 'Latihan Lari',
                'tanggal_awal' => '2010-03-10',
                'tanggal_akhir' => '2010-04-10',
                'foto_sampul' => 'test.png',
                'id_jenjang' => '1',

            ],
            [
                'nama_pelatihan' => 'Latihan Lari 2',
                'tanggal_awal' => '2010-03-11',
                'tanggal_akhir' => '2010-04-11',
                'foto_sampul' => 'test2.png',
                'id_jenjang' => '2',
            ],
            [
                'nama_pelatihan' => 'Latihan Lari 3',
                'tanggal_awal' => '2010-03-12',
                'tanggal_akhir' => '2010-04-12',
                'foto_sampul' => 'test3.png',
                'id_jenjang' => '3',
            ],
            [
                'nama_pelatihan' => 'Latihan Lari 4',
                'tanggal_awal' => '2010-03-13',
                'tanggal_akhir' => '2010-04-13',
                'foto_sampul' => 'test4.png',
                'id_jenjang' => '1',
            ],
            [
                'nama_pelatihan' => 'Latihan Lari 4',
                'tanggal_awal' => '2010-03-13',
                'tanggal_akhir' => '2010-04-13',
                'foto_sampul' => 'test4.png',
                'id_jenjang' => '1',
            ],
            [
                'nama_pelatihan' => 'Latihan Lari 5',
                'tanggal_awal' => '2010-03-14',
                'tanggal_akhir' => '2010-04-14',
                'foto_sampul' => 'test5.png',
                'id_jenjang' => '1',
            ],
            [
                'nama_pelatihan' => 'Latihan Lari 6',
                'tanggal_awal' => '2010-03-15',
                'tanggal_akhir' => '2010-04-15',
                'foto_sampul' => 'test6.png',
                'id_jenjang' => '1',
            ],
            [
                'nama_pelatihan' => 'Latihan Lari 7',
                'tanggal_awal' => '2010-03-16',
                'tanggal_akhir' => '2010-04-16',
                'foto_sampul' => 'test7.png',
                'id_jenjang' => '1',
            ],
        ];
        Pelatihan::insert($pelatihan);
    }
}
