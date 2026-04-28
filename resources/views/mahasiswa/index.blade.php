@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Data Mahasiswa</h4>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mahasiswa</th>
                                    <th>Lahir</th>
                                    <th>Program Studi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($mahasiswa as $index => $mhs)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>

                                        <td>
                                            {{ $mhs->nim }} <br>
                                            {{ $mhs->nama }}
                                        </td>

                                        <td>
                                            {{ $mhs->tempat_lahir }}, {{ $mhs->tgl_lahir }} <br>
                                            {{ $mhs->jenis_kelamin }}
                                        </td>

                                        <td>
                                            {{ $mhs->programStudi->nama_prodi ?? '-' }} <br>
                                            <small>{{ $mhs->programStudi->fakultas ?? '-' }}</small>
                                        </td>

                                        <td>
                                            <button class="btn btn-primary btn-sm">Edit</button>
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection