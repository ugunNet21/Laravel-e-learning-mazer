@extends('backend.layouts.app')
@section('title', 'Edit Raport')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Edit Raport</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-20">
                    <div class="card">
                        <div class="card-header">Edit Raport</div>
                        <div class="card-body">
                            <form action="{{ route('raports.update', $raport->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="siswa_id">Siswa:</label>
                                    <select name="siswa_id" id="siswa_id" class="form-control">
                                        @foreach ($siswas as $siswa)
                                            <option value="{{ $siswa->id }}"
                                                {{ $raport->siswa_id == $siswa->id ? 'selected' : '' }}>{{ $siswa->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="semester">Semester:</label>
                                    <input type="text" name="semester" id="semester" class="form-control"
                                        value="{{ $raport->semester }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_ajaran">Tahun Ajaran:</label>
                                    <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control"
                                        value="{{ $raport->tahun_ajaran }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="rata_rata_nilai">Rata-rata Nilai:</label>
                                    <input type="number" name="rata_rata_nilai" id="rata_rata_nilai" class="form-control"
                                        value="{{ $raport->rata_rata_nilai }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan:</label>
                                    <input type="text" name="keterangan" id="keterangan" class="form-control"
                                        value="{{ $raport->keterangan }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenjang">Jenjang:</label>
                                    <select name="jenjang" id="jenjang" class="form-control">
                                        <option value="SMP" {{ $raport->jenjang == 'SMP' ? 'selected' : '' }}>SMP
                                        </option>
                                        <option value="SMA" {{ $raport->jenjang == 'SMA' ? 'selected' : '' }}>SMA
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
