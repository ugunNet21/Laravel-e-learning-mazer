@extends('backend.layouts.app')
@section('title', 'Detail Raport')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Detail Raport</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-20">
                    <div class="card">
                        <div class="card-header">Detail Raport</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="siswa_id">Siswa:</label>
                                <input type="text" name="siswa_id" id="siswa_id" class="form-control"
                                    value="{{ $raport->siswa->nama }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="semester">Semester:</label>
                                <input type="text" name="semester" id="semester" class="form-control"
                                    value="{{ $raport->semester }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="tahun_ajaran">Tahun Ajaran:</label>
                                <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control"
                                    value="{{ $raport->tahun_ajaran }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="rata_rata_nilai">Rata-rata Nilai:</label>
                                <input type="number" name="rata_rata_nilai" id="rata_rata_nilai" class="form-control"
                                    value="{{ $raport->rata_rata_nilai }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan:</label>
                                <input type="text" name="keterangan" id="keterangan" class="form-control"
                                    value="{{ $raport->keterangan }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="jenjang">Jenjang:</label>
                                <input type="text" name="jenjang" id="jenjang" class="form-control"
                                    value="{{ $raport->jenjang }}" disabled>
                            </div>
                            <a href="{{ route('raports.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
