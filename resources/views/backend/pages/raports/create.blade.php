@extends('backend.layouts.app')
@section('title', 'Buat raport')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Buat Raport</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-20">
                    <div class="card">
                        <div class="card-header">Buat Raport</div>
                        <div class="card-body">
                            <form action="{{ route('raports.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="siswa_id">Siswa:</label>
                                    <select name="siswa_id" id="siswa_id" class="form-control">
                                        @foreach ($siswas as $siswa)
                                            <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="semester">Semester:</label>
                                    <input type="text" name="semester" id="semester" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_ajaran">Tahun Ajaran:</label>
                                    <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="rata_rata_nilai">Rata-rata Nilai:</label>
                                    <input type="number" name="rata_rata_nilai" id="rata_rata_nilai" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan:</label>
                                    <input type="text" name="keterangan" id="keterangan" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenjang">Jenjang:</label>
                                    <select name="jenjang" id="jenjang" class="form-control">
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
