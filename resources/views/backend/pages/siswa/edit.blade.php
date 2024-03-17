@extends('backend.layouts.app')
@section('title', 'Edit Siswa')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Edit Siswa</h3>
        </div>
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-20">
                    <div class="card">
                        <div class="card-header">Edit Siswa</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('siswa.update', $siswa->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="{{ $siswa->nama }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="Laki-laki" @if ($siswa->jenis_kelamin == 'Laki-laki') selected @endif>
                                            Laki-laki</option>
                                        <option value="Perempuan" @if ($siswa->jenis_kelamin == 'Perempuan') selected @endif>
                                            Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                        value="{{ $siswa->tanggal_lahir }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat:</label>
                                    <textarea class="form-control" id="alamat" name="alamat" required>{{ $siswa->alamat }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="jenjang">Jenjang:</label>
                                    <select class="form-control" id="jenjang" name="jenjang" required>
                                        <option value="SMP" @if ($siswa->jenjang == 'SMP') selected @endif>SMP
                                        </option>
                                        <option value="SMA" @if ($siswa->jenjang == 'SMA') selected @endif>SMA
                                        </option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
