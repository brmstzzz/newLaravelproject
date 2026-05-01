@extends('layouts.layout')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Edit Data</h4>
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                    </div>

                    <div class="basic-form p-4">
                        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label>NIM</label>
                                    <input type="text" name="nim" class="form-control"
                                        maxlength="15" value="{{ $mahasiswa->nim }}" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control"
                                        value="{{ $mahasiswa->nama }}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control"
                                        value="{{ $mahasiswa->tempat_lahir }}" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control"
                                        value="{{ $mahasiswa->tgl_lahir }}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="L"
                                            {{ $mahasiswa->jenis_kelamin == 'L' ? 'selected' : '' }}>
                                            Laki-laki
                                        </option>
                                        <option value="P"
                                            {{ $mahasiswa->jenis_kelamin == 'P' ? 'selected' : '' }}>
                                            Perempuan
                                        </option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Program Studi</label>
                                    <select name="program_studi_id" class="form-control">
                                        @foreach($listProdi as $p)
                                            <option value="{{ $p->id }}"
                                                {{ $mahasiswa->program_studi_id == $p->id ? 'selected' : '' }}>
                                                {{ $p->nama_prodi }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary float-right">
                                <i class="fa fa-save"></i> Simpan Perubahan
                            </button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection