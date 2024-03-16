<!-- resources/views/kelas/edit.blade.php -->

@extends('backend.layouts.app')
@section('title', 'Edit Kelas')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Edit Kelas</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Edit Kelas</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('kelas_admin.update', $kelas_admin) }}">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="nama">Nama Kelas</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="{{ old('nama', $kelas_admin->nama) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="tingkat">Tingkat</label>
                                    <input type="number" class="form-control" id="tingkat" name="tingkat"
                                        value="{{ old('tingkat', $kelas_admin->tingkat) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="jenjang">Jenjang</label>
                                    <select class="form-control" id="jenjang" name="jenjang" required>
                                        <option value="SMP" {{ $kelas_admin->jenjang == 'SMP' ? 'selected' : '' }}>SMP</option>
                                        <option value="SMA" {{ $kelas_admin->jenjang == 'SMA' ? 'selected' : '' }}>SMA</option>
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
