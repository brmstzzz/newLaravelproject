@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-tittle">{{ $master['title'] }}</h4>
                        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> Tambah
                        </a>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success text-center" id="alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
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
                                        {{ $mhs->programStudi->fakultas ?? '-' }} <br>
                                        {{ $mhs->programStudi->nama_prodi ?? '-' }}
                                    </td>

                                    <td>
                                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-sm btn-primary">
                                            Edit
                                        </a>

                                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                Hapus
                                            </button>
                                        </form> 
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