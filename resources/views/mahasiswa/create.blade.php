@extends('layouts.layout')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Tambah Data</h4>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>

                <div class="basic-form p-4">
                    <form action="{{ route('mahasiswa.store') }}" method="POST">
                        @csrf

                        <div class="form-group row mb-3">
                            <div class="col-md-6 mb-3">
                                <label>NIM</label>
                                <input type="text" name="nim" class="form-control" maxlength="15" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-6 mb-3">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-6 mb-3">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Program Studi</label>
                                <select name="program_studi_id" class="form-control">
                                    @foreach($listProdi as $p)
                                        <option value="{{ $p->id }}">
                                            {{ $p->nama_prodi }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary float-right">
                            <i class="fa fa-save"></i> Simpan
                        </button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection