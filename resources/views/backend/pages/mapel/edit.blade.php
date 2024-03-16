<!-- resources/views/backend/mapel/edit.blade.php -->

@extends('backend.layouts.app')
@section('title', 'Edit mata pelajaran')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Edit Pelajaran</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Edit Mata Pelajaran</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('mapel.update', $mapel) }}">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="nama">Nama Mata Pelajaran</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="{{ old('nama', $mapel->nama) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $mapel->deskripsi) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="Aktif" {{ $mapel->status == 'Aktif' ? 'selected' : '' }}>
                                            Aktif</option>
                                        <option value="Nonaktif"
                                            {{ $mapel->status == 'Nonaktif' ? 'selected' : '' }}>Nonaktif</option>
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
