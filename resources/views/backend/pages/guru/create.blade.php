<!-- resources/views/guru/create.blade.php -->

@extends('backend.layouts.app')
@section('title', 'Tambah guru')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Tambah Guru</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Tambah Guru</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('guru.store') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="nama">Nama Guru</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>

                                <div class="form-group">
                                    <label for="mata_pelajaran">Mata Pelajaran</label>
                                    <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran"
                                        required>
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
