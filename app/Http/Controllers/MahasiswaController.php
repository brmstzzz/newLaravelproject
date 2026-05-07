<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\ProgramStudi;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('programStudi')->latest('id')->get();

        $master = [
            'title' => 'Data Mahasiswa'
        ];

        return view('mahasiswa.index', compact('mahasiswa', 'master'));
    }

    public function create()
    {
        $data['master'] = [
            'title' => 'Tambah Mahasiswa'
        ];

        $data['listProdi'] = ProgramStudi::all();

        return view('mahasiswa.create', $data);
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $data['master'] = array('tittle' => 'Edit Mahasiswa');
        $data['mahasiswa'] = $mahasiswa;
        $data['listProdi'] = ProgramStudi::all();

        return view('mahasiswa.edit', $data);
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim,' . $mahasiswa->id . '|max:15',
            'nama' => 'required|string',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'program_studi_id' => 'required|exists:program_studi,id',
        ]);

        try {
            $mahasiswa->update([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'program_studi_id' => $request->program_studi_id,
            ]);

            return redirect()->route('mahasiswa.index')
                ->with('success', 'Data berhasil diupdate');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal update: ' . $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim|max:15',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'program_studi_id' => 'required|exists:program_studi,id',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        try {
            $mahasiswa->delete();

            return redirect()->route('mahasiswa.index')
                ->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal hapus: ' . $e->getMessage());
        }
    }

}

