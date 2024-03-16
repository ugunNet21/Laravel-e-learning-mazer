<!-- resources/views/kelas/show.blade.php -->

@extends('backend.layouts.app')
@section('title', 'Detail kelas')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Kelas</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Detail Kelas</div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Kelas</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $kelas_admin->nama }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="tingkat">Tingkat</label>
                                <input type="text" class="form-control" id="tingkat" name="tingkat"
                                    value="{{ $kelas_admin->tingkat }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="jenjang">Jenjang</label>
                                <input type="text" class="form-control" id="jenjang" name="jenjang"
                                    value="{{ $kelas_admin->jenjang }}" readonly>
                            </div>

                            <a href="{{ route('kelas_admin.edit', $kelas_admin) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('kelas_admin.destroy', $kelas_admin) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus kelas ini?')">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
