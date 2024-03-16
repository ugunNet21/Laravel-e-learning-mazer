<!-- resources/views/jurusan/show.blade.php -->

@extends('backend.layouts.app')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Detail Jurusan</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Detail Jurusan</div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Jurusan</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $jurusan->nama }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" id="status" name="status"
                                    value="{{ $jurusan->status }}" readonly>
                            </div>

                            <a href="{{ route('jurusan.edit', $jurusan) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('jurusan.destroy', $jurusan) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus jurusan ini?')">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
