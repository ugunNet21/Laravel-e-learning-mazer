<!-- resources/views/backend/pages/e_learning/show.blade.php -->

@extends('backend.layouts.app')

@section('title', 'Detail E-Learning')

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Detail E-Learning</h3>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Detail E-Learning</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="guru">Guru</label>
                            <p>{{ $eLearning->guru->nama }}</p>
                        </div>

                        <div class="form-group">
                            <label for="mata_pelajaran">Mata Pelajaran</label>
                            <p>{{ $eLearning->mataPelajaran->nama }}</p>
                        </div>

                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <p>{{ $eLearning->judul }}</p>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <p>{{ $eLearning->deskripsi }}</p>
                        </div>

                        <div class="form-group">
                            <label for="tautan">Tautan</label>
                            <p>{{ $eLearning->tautan }}</p>
                        </div>

                        <div class="form-group">
                            <label for="jenjang">Jenjang</label>
                            <p>{{ $eLearning->jenjang }}</p>
                        </div>

                        <a href="{{ route('e_learning.edit', $eLearning) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('e_learning.destroy', $eLearning) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus E-Learning ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
