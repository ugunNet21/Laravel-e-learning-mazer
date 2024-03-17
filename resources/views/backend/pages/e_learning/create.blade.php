<!-- resources/views/e_learning/create.blade.php -->

@extends('backend.layouts.app')
@section('title', 'Tambah E-Learning')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Tambah E-Learning</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Tambah E-Learning</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('e_learning.store') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="guru_id">Guru</label>
                                    <select class="form-control" id="guru_id" name="guru_id" required>
                                        @foreach ($gurus as $guru)
                                            <option value="{{ $guru->id }}">{{ $guru->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="mata_pelajaran_id">Mata Pelajaran</label>
                                    <select class="form-control" id="mata_pelajaran_id" name="mata_pelajaran_id" required>
                                        @foreach ($mataPelajarans as $mataPelajaran)
                                            <option value="{{ $mataPelajaran->id }}">{{ $mataPelajaran->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" required>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="tautan">Tautan</label>
                                    <input type="url" class="form-control" id="tautan" name="tautan" required>
                                </div>

                                <div class="form-group">
                                    <label for="jenjang">Jenjang</label>
                                    <select class="form-control" id="jenjang" name="jenjang" required>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
