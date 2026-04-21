<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa=
    [
               
        [
            'nim' => 'G.131.25.0095',
            'nama' => 'Raya Sumaryao',
            'tempat' => 'Semarang',
            'tanggal' => '2005-5-24',
            'jk' => 'Perempuan',
            'prodi' => 'Teknik Informatika'
        ],
        [
            'nim' => 'G.131.25.0055',
            'nama' => 'Siti Muraini',
            'tempat' => 'Jogja',
            'tanggal' => '2005-4-12',
            'jk' => 'Perempuan',
            'prodi' => 'Sistem Informasi'
        ],
        [
            'nim' => 'G.131.25.0076',
            'nama' => 'Jayowa Mulyanto',
            'tempat' => 'Tembalang',
            'tanggal' => '2005-2-11',
            'jk' => 'Laki-Laki',
            'prodi' => 'Teknik Sipil'
        ],
        [
            'nim' => 'G.131.25.0078',
            'nama' => 'Leon S junaidi',
            'tempat' => 'Jepara',
            'tanggal' => '2005-7-13',
            'jk' => 'Laki-Laki',
            'prodi' => 'Kehutanan'
        ],
        [
            'nim' => 'G.131.25.0081',
            'nama' => 'Midwntrrr simajumpang',
            'tempat' => 'Demak',
            'tanggal' => '2004-8-15',
            'jk' => 'Laki-Laki',
            'prodi' => 'Manajemen'
        ]
    ];

        return view('mahasiswa.index', compact('mahasiswa'));
    }
}
