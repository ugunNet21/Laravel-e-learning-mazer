@extends('backend.layouts.app')
@section('title', 'Tambah Siswa')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Tambah siswa</h3>
        </div>
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-20">
                    <div class="card">
                        <div class="card-header">Tambah Siswa</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('siswa.store') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>

                                    <div class="col-md-6">
                                        <input id="nama" type="text"
                                            class="form-control @error('nama') is-invalid @enderror" name="nama"
                                            value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">Jenis
                                        Kelamin</label>

                                    <div class="col-md-6">
                                        <select name="jenis_kelamin" id="jenis_kelamin"
                                            class="form-control @error('jenis_kelamin') is-invalid @enderror" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki"
                                                {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                                            </option>
                                            <option value="Perempuan"
                                                {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                            </option>
                                        </select>

                                        @error('jenis_kelamin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-right">Tanggal
                                        Lahir</label>

                                    <div class="col-md-6">
                                        <input id="tanggal_lahir" type="date"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>

                                        @error('tanggal_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>

                                    <div class="col-md-6">
                                        <textarea name="alamat" id="alamat" cols="30" rows="3"
                                            class="form-control @error('alamat') is-invalid @enderror" required>{{ old('alamat') }}</textarea>

                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenjang" class="col-md-4 col-form-label text-md-right">Jenjang</label>

                                    <div class="col-md-6">
                                        <select name="jenjang" id="jenjang"
                                            class="form-control @error('jenjang') is-invalid @enderror" required>
                                            <option value="">Pilih Jenjang</option>
                                            <option value="SMP" {{ old('jenjang') == 'SMP' ? 'selected' : '' }}>SMP
                                            </option>
                                            <option value="SMA" {{ old('jenjang') == 'SMA' ? 'selected' : '' }}>SMA
                                            </option>
                                        </select>

                                        @error('jenjang')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
