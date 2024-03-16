<!-- resources/views/guru/show.blade.php -->

@extends('backend.layouts.app')
@section('title', 'Detail guru')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Detail Guru</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Detail Guru</div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Guru</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $guru->nama }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="mata_pelajaran">Mata Pelajaran</label>
                                <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran"
                                    value="{{ $guru->mata_pelajaran }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="jenjang">Jenjang</label>
                                <input type="text" class="form-control" id="jenjang" name="jenjang"
                                    value="{{ $guru->jenjang }}" readonly>
                            </div>

                            <a href="{{ route('guru.edit', $guru) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('guru.destroy', $guru) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus guru ini?')">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
