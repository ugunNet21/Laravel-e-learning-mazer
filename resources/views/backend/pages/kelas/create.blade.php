<!-- resources/views/kelas/create.blade.php -->

@extends('backend.layouts.app')
@section('title', 'Tambah Kelas')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Tambah Kelas</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Tambah Kelas</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('kelas_admin.store') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="nama">Nama Kelas</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>

                                <div class="form-group">
                                    <label for="tingkat">Tingkat</label>
                                    <input type="number" class="form-control" id="tingkat" name="tingkat" required>
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
