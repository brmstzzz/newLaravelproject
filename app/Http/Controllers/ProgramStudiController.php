<?php

namespace App\Http\Controllers;

use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    public function index()
    {
        $data['master'] = ['title' => 'Data Program Studi'];
        $data['programStudi'] = ProgramStudi::latest('id')->get();

        return view('program_studi.index', $data);
    }

    public function create()
    {
        $data['master'] = ['title' => 'Tambah Program Studi'];

        return view('program_studi.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_prodi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'jenjang' => 'required|in:D3,S1,S2,S3',
        ]);

        ProgramStudi::create($request->only(['nama_prodi', 'fakultas', 'jenjang']));

        return redirect()->route('program-studi.index')
            ->with('success', 'Program Studi berhasil ditambahkan');
    }

    public function edit(ProgramStudi $programStudi)
    {
        $data['master'] = ['title' => 'Edit Program Studi'];
        $data['programStudi'] = $programStudi;

        return view('program_studi.edit', $data);
    }

    public function update(Request $request, ProgramStudi $programStudi)
    {
        $request->validate([
            'nama_prodi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'jenjang' => 'required|in:D3,S1,S2,S3',
        ]);

        $programStudi->update($request->only(['nama_prodi', 'fakultas', 'jenjang']));

        return redirect()->route('program-studi.index')
            ->with('success', 'Program Studi berhasil diupdate');
    }

    public function destroy(ProgramStudi $programStudi)
    {
        try {
            $programStudi->delete();

            return redirect()->route('program-studi.index')
                ->with('success', 'Program Studi berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal hapus: ' . $e->getMessage());
        }
    }
}
