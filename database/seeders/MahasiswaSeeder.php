<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\ProgramStudi;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nim' => 'G.131.25.0095',
                'nama' => 'Raya Sumaryao',
                'tempat' => 'Semarang',
                'tanggal' => '2005-05-24',
                'jk' => 'Perempuan',
                'prodi' => 'S1 Teknik Informatika'
            ],
            [
                'nim' => 'G.131.25.0055',
                'nama' => 'Siti Muraini',
                'tempat' => 'Jogja',
                'tanggal' => '2005-04-12',
                'jk' => 'Perempuan',
                'prodi' => 'S1 Sistem Informasi'
            ],
            [
                'nim' => 'G.131.25.0076',
                'nama' => 'Jayowa Mulyanto',
                'tempat' => 'Tembalang',
                'tanggal' => '2005-02-11',
                'jk' => 'Laki-Laki',
                'prodi' => 'S1 Teknik Sipil'
            ],
            [
                'nim' => 'G.131.25.0078',
                'nama' => 'Leon S junaidi',
                'tempat' => 'Jepara',
                'tanggal' => '2005-07-13',
                'jk' => 'Laki-Laki',
                'prodi' => 'S1 Akuntansi'
            ],
            [
                'nim' => 'G.131.25.0081',
                'nama' => 'Midwntrrr simajumpang',
                'tempat' => 'Demak',
                'tanggal' => '2004-08-15',
                'jk' => 'Laki-Laki',
                'prodi' => 'S1 Manajemen'
            ],
        ];

        foreach ($data as $item) {

            // Konversi jenis kelamin
            $jk = $item['jk'] == 'Laki-Laki' ? 'L' : 'P';

            // Cari program studi
            $prodi = ProgramStudi::where('nama_prodi', $item['prodi'])->first();

            Mahasiswa::create([
                'nim' => $item['nim'],
                'nama' => $item['nama'],
                'tempat_lahir' => $item['tempat'],
                'tgl_lahir' => $item['tanggal'],
                'jenis_kelamin' => $jk,
                'program_studi_id' => $prodi ? $prodi->id : 1,
            ]);
        }
    }
}