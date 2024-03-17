@extends('backend.layouts.app')
@section('title', 'Tambah Absensi Siswa')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Tambah Absensi Siswa</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('absensi_siswa.store') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="siswa_id" class="col-md-4 col-form-label text-md-right">Siswa</label>

                                    <div class="col-md-6">
                                        <select id="siswa_id" class="form-control" name="siswa_id" required>
                                            @foreach ($siswas as $siswa)
                                                <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                                            @endforeach
                                        </select>

                                        @error('siswa_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tanggal" class="col-md-4 col-form-label text-md-right">Tanggal</label>

                                    <div class="col-md-6">
                                        <input id="tanggal" type="date"
                                            class="form-control @error('tanggal') is-invalid @enderror" name="tanggal"
                                            required autofocus>

                                        @error('tanggal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kehadiran" class="col-md-4 col-form-label text-md-right">Kehadiran</label>

                                    <div class="col-md-6">
                                        <select id="kehadiran" class="form-control" name="kehadiran" required>
                                            <option value="hadir">Hadir</option>
                                            <option value="tidak_hadir">Tidak Hadir</option>
                                            <option value="izin">Izin</option>
                                        </select>

                                        @error('kehadiran')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenjang" class="col-md-4 col-form-label text-md-right">Jenjang</label>

                                    <div class="col-md-6">
                                        <select id="jenjang" class="form-control" name="jenjang" required>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
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
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('absensi_siswa.index') }}" class="btn btn-secondary">Batal</a>
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
