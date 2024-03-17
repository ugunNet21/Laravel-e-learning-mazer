@extends('backend.layouts.app')
@section('title', 'Detail Absensi Guru')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Detail Absensi Guru</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Detail Absensi Guru</div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="guru_id">Nama Guru:</label>
                                <input type="text" class="form-control" id="guru_id" name="guru_id"
                                    value="{{ $absensiGuru->guru->nama }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="tanggal">Tanggal:</label>
                                <input type="text" class="form-control" id="tanggal" name="tanggal"
                                    value="{{ $absensiGuru->tanggal }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="kehadiran">Kehadiran:</label>
                                <input type="text" class="form-control" id="kehadiran" name="kehadiran"
                                    value="{{ $absensiGuru->kehadiran }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="jenjang">Jenjang:</label>
                                <input type="text" class="form-control" id="jenjang" name="jenjang"
                                    value="{{ $absensiGuru->jenjang }}" readonly>
                            </div>

                            <a href="{{ route('absensi-guru.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
