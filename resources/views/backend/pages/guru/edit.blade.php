<!-- resources/views/guru/edit.blade.php -->

@extends('backend.layouts.app')
@section('title', 'Edit guru')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Edit Guru</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Edit Guru</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('guru.update', $guru) }}">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="nama">Nama Guru</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="{{ old('nama', $guru->nama) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="mata_pelajaran">Mata Pelajaran</label>
                                    <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran"
                                        value="{{ old('mata_pelajaran', $guru->mata_pelajaran) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="jenjang">Jenjang</label>
                                    <select class="form-control" id="jenjang" name="jenjang" required>
                                        <option value="SMP" {{ $guru->jenjang == 'SMP' ? 'selected' : '' }}>SMP</option>
                                        <option value="SMA" {{ $guru->jenjang == 'SMA' ? 'selected' : '' }}>SMA</option>
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
