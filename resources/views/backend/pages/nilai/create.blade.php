@extends('backend.layouts.app')
@section('title', 'Tambah Nilai')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Tambah Nilai</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Tambah Nilai</div>

                        <div class="card-body">
                            <form action="{{ route('nilai.store') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="siswa_id">Siswa:</label>
                                    <select class="form-control" name="siswa_id" id="siswa_id">
                                        @foreach ($siswas as $siswa)
                                            <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="mata_pelajaran_id">Mata Pelajaran:</label>
                                    <select class="form-control" name="mata_pelajaran_id" id="mata_pelajaran_id">
                                        @foreach ($mataPelajarans as $mataPelajaran)
                                            <option value="{{ $mataPelajaran->id }}">{{ $mataPelajaran->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="nilai_ulangan_harian">Nilai Ulangan Harian:</label>
                                    <input type="text" class="form-control" id="nilai_ulangan_harian"
                                        name="nilai_ulangan_harian">
                                </div>

                                <div class="form-group">
                                    <label for="nilai_ujian_tengah_semester">Nilai Ujian Tengah Semester:</label>
                                    <input type="text" class="form-control" id="nilai_ujian_tengah_semester"
                                        name="nilai_ujian_tengah_semester">
                                </div>

                                <div class="form-group">
                                    <label for="nilai_ujian_akhir_semester">Nilai Ujian Akhir Semester:</label>
                                    <input type="text" class="form-control" id="nilai_ujian_akhir_semester"
                                        name="nilai_ujian_akhir_semester">
                                </div>

                                <div class="form-group">
                                    <label for="sumber_nilai">Sumber Nilai:</label>
                                    <select class="form-control" name="sumber_nilai" id="sumber_nilai">
                                        <option value="e-learning">E-Learning</option>
                                        <option value="manual">Manual</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="jenjang">Jenjang:</label>
                                    <select class="form-control" name="jenjang" id="jenjang">
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
