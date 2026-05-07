@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-tittle">{{ $master['title'] }}</h4>
                        <a href="{{ route('program-studi.create') }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> Tambah
                        </a>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success text-center" id="alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger text-center" id="alert-success">
                            {{ session('error') }}
                        </div>
                    @endif

                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Prodi</th>
                                <th>Fakultas</th>
                                <th>Jenjang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($programStudi as $index => $prodi)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $prodi->nama_prodi }}</td>
                                    <td>{{ $prodi->fakultas }}</td>
                                    <td>{{ $prodi->jenjang }}</td>
                                    <td>
                                        <a href="{{ route('program-studi.edit', $prodi->id) }}" class="btn btn-sm btn-primary">
                                            Edit
                                        </a>

                                        <form action="{{ route('program-studi.destroy', $prodi->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
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
@endsection
