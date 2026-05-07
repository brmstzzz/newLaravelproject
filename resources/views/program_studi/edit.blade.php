@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-tittle">{{ $master['title'] }}</h4>
                        <a href="{{ route('program-studi.index') }}" class="btn btn-primary btn-sm">
                            Kembali
                        </a>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('program-studi.update', $programStudi->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Nama Prodi</label>
                            <input type="text" name="nama_prodi" class="form-control" value="{{ old('nama_prodi', $programStudi->nama_prodi) }}" required>
                        </div>

                        <div class="form-group">
                            <label>Fakultas</label>
                            <input type="text" name="fakultas" class="form-control" value="{{ old('fakultas', $programStudi->fakultas) }}" required>
                        </div>

                        <div class="form-group">
                            <label>Jenjang</label>
                            <select name="jenjang" class="form-control" required>
                                <option value="">Pilih Jenjang</option>
                                <option value="D3" {{ old('jenjang', $programStudi->jenjang) == 'D3' ? 'selected' : '' }}>D3</option>
                                <option value="S1" {{ old('jenjang', $programStudi->jenjang) == 'S1' ? 'selected' : '' }}>S1</option>
                                <option value="S2" {{ old('jenjang', $programStudi->jenjang) == 'S2' ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ old('jenjang', $programStudi->jenjang) == 'S3' ? 'selected' : '' }}>S3</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
