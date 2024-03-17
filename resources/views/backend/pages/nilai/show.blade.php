@extends('backend.layouts.app')
@section('title', 'Detail Nilai')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Detail Nilai</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Detail Nilai</div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="siswa_id">Siswa:</label>
                                <input type="text" class="form-control" id="siswa_id" value="{{ $nilai->siswa->nama }}"
                                    readonly>
                            </div>

                            <div class="form-group">
                                <label for="mata_pelajaran_id">Mata Pelajaran:</label>
                                <input type="text" class="form-control" id="mata_pelajaran_id"
                                    value="{{ $nilai->mataPelajaran->nama }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nilai_ulangan_harian">Nilai Ulangan Harian:</label>
                                <input type="text" class="form-control" id="nilai_ulangan_harian"
                                    value="{{ $nilai->nilai_ulangan_harian }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nilai_ujian_tengah_semester">Nilai Ujian Tengah Semester:</label>
                                <input type="text" class="form-control" id="nilai_ujian_tengah_semester"
                                    value="{{ $nilai->nilai_ujian_tengah_semester }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nilai_ujian_akhir_semester">Nilai Ujian Akhir Semester:</label>
                                <input type="text" class="form-control" id="nilai_ujian_akhir_semester"
                                    value="{{ $nilai->nilai_ujian_akhir_semester }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="sumber_nilai">Sumber Nilai:</label>
                                <input type="text" class="form-control" id="sumber_nilai"
                                    value="{{ $nilai->sumber_nilai }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="jenjang">Jenjang:</label>
                                <input type="text" class="form-control" id="jenjang" value="{{ $nilai->jenjang }}"
                                    readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
