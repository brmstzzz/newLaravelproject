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
                                @for ($i = 0; $i < 100; $i++)
                                    @foreach ($mahasiswa as $index => $mhs)
                                        <tr>
                                            <td>{{ $i * count($mahasiswa) + $index + 1 }}</td>
                                            <td>
                                                {{ $mhs['nim'] }} <br>
                                                {{ $mhs['nama'] }}
                                            </td>
                                            <td>
                                                {{ $mhs['tempat'] }}, {{ $mhs['tanggal'] }} <br>
                                                {{ $mhs['jk'] }}
                                            </td>
                                            <td>{{ $mhs['prodi'] }}</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm">Edit</button>
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endfor
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection