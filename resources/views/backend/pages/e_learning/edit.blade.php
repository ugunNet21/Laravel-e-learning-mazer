<!-- resources/views/backend/pages/e_learning/edit.blade.php -->

@extends('backend.layouts.app')

@section('title', 'Edit E-Learning')

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Edit E-Learning</h3>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Edit E-Learning</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('e_learning.update', $eLearning) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="guru_id">Guru</label>
                                <select class="form-control" id="guru_id" name="guru_id" required>
                                    @foreach ($gurus as $guru)
                                    <option value="{{ $guru->id }}" @if ($guru->id === $eLearning->guru_id) selected @endif>{{ $guru->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="mata_pelajaran_id">Mata Pelajaran</label>
                                <select class="form-control" id="mata_pelajaran_id" name="mata_pelajaran_id" required>
                                    @foreach ($mataPelajarans as $mataPelajaran)
                                    <option value="{{ $mataPelajaran->id }}" @if ($mataPelajaran->id === $eLearning->mata_pelajaran_id) selected @endif>{{ $mataPelajaran->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $eLearning->judul) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ old('deskripsi', $eLearning->deskripsi) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="tautan">Tautan</label>
                                <input type="url" class="form-control" id="tautan" name="tautan" value="{{ old('tautan', $eLearning->tautan) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="jenjang">Jenjang</label>
                                <select class="form-control" id="jenjang" name="jenjang" required>
                                    <option value="SMP" @if ($eLearning->jenjang === 'SMP') selected @endif>SMP</option>
                                    <option value="SMA" @if ($eLearning->jenjang === 'SMA') selected @endif>SMA</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
