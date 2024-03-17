@extends('backend.layouts.app')
@section('title', 'Edit Absensi Siswa')
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
                        <div class="card-header">Edit Absensi Siswa</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('absensi_siswa.update', $absensi_siswa->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label for="siswa_id" class="col-md-4 col-form-label text-md-right">Siswa</label>

                                    <div class="col-md-6">
                                        <select id="siswa_id" class="form-control" name="siswa_id" required>
                                            @foreach ($siswas as $siswa)
                                                <option value="{{ $siswa->id }}" {{ $siswa->id == $absensi_siswa->siswa_id ? 'selected' : '' }}>{{ $siswa->nama }}</option>
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
                                            value="{{ $absensi_siswa->tanggal }}" required autofocus>

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
                                            <option value="hadir" {{ $absensi_siswa->kehadiran == 'hadir' ? 'selected' : '' }}>Hadir</option>
                                            <option value="tidak_hadir" {{ $absensi_siswa->kehadiran == 'tidak_hadir' ? 'selected' : '' }}>Tidak Hadir</option>
                                            <option value="izin" {{ $absensi_siswa->kehadiran == 'izin' ? 'selected' : '' }}>Izin</option>
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
                                            <option value="SMP" {{ $absensi_siswa->jenjang == 'SMP' ? 'selected' : '' }}>SMP</option>
                                            <option value="SMA" {{ $absensi_siswa->jenjang == 'SMA' ? 'selected' : '' }}>SMA</option>
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
