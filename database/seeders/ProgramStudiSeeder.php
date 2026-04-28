<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProgramStudi;

class ProgramStudiSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_prodi' => 'S1 Teknik Informatika',
                'fakultas' => 'Fakultas Teknologi Informasi dan Komunikasi',
                'jenjang' => 'S1'
            ],
            [
                'nama_prodi' => 'S1 Sistem Informasi',
                'fakultas' => 'Fakultas Teknologi Informasi dan Komunikasi',
                'jenjang' => 'S1'
            ],
            [
                'nama_prodi' => 'S1 Manajemen',
                'fakultas' => 'Fakultas Ekonomi',
                'jenjang' => 'S1'
            ],
            [
                'nama_prodi' => 'S1 Akuntansi',
                'fakultas' => 'Fakultas Ekonomi',
                'jenjang' => 'S1'
            ],
            [
                'nama_prodi' => 'S1 Teknik Sipil',
                'fakultas' => 'Fakultas Teknik',
                'jenjang' => 'S1'
            ],
        ];

        foreach ($data as $item) {
            ProgramStudi::create($item);
        }
    }
}