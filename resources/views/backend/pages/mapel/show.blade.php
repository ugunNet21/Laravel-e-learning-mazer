<!-- resources/views/mapel/show.blade.php -->

@extends('backend.layouts.app')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Detail Mata Pelajaran</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Detail Mata Pelajaran</div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Mata Pelajaran</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $mapel->nama }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" readonly>{{ $mapel->deskripsi }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" id="status" name="status" value="{{ $mapel->status }}" readonly>
                            </div>

                            <a href="{{ route('mapel.edit', $mapel) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('mapel.destroy', $mapel) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus mata pelajaran ini?')">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
