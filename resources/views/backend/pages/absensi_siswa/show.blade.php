@extends('backend.layouts.app')
@section('title', 'Detail Absensi Siswa')
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
                        <div class="card-header">Detail Absensi Siswa</div>

                        <div class="card-body">
                            <div class="form-group row">
                                <label for="siswa_id" class="col-md-4 col-form-label text-md-right">Siswa</label>

                                <div class="col-md-6">
                                    <p>{{ $absensi_siswa->siswa->nama }}</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal" class="col-md-4 col-form-label text-md-right">Tanggal</label>

                                <div class="col-md-6">
                                    <p>{{ $absensi_siswa->tanggal }}</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kehadiran" class="col-md-4 col-form-label text-md-right">Kehadiran</label>

                                <div class="col-md-6">
                                    <p>{{ $absensi_siswa->kehadiran }}</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenjang" class="col-md-4 col-form-label text-md-right">Jenjang</label>

                                <div class="col-md-6">
                                    <p>{{ $absensi_siswa->jenjang }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
