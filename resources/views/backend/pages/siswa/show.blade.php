@extends('backend.layouts.app')
@section('title', 'Detail Siswa')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Detail Siswa</h3>
        </div>
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-20">
                    <div class="card">
                        <div class="card-header">Detail Siswa</div>

                        <div class="card-body">
                            <div class="form-group">
                                <strong>Nama:</strong>
                                {{ $siswa->nama }}
                            </div>
                            <div class="form-group">
                                <strong>Jenis Kelamin:</strong>
                                {{ $siswa->jenis_kelamin }}
                            </div>
                            <div class="form-group">
                                <strong>Tanggal Lahir:</strong>
                                {{ $siswa->tanggal_lahir }}
                            </div>
                            <div class="form-group">
                                <strong>Alamat:</strong>
                                {{ $siswa->alamat }}
                            </div>
                            <div class="form-group">
                                <strong>Jenjang:</strong>
                                {{ $siswa->jenjang }}
                            </div>
                            <div class="form-group">
                                <a href="{{ route('siswa.index') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
