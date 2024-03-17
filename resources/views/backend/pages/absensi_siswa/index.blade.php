@extends('backend.layouts.app')
@section('title', 'Daftar Absensi siswa')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Absensi Siswa</h3>
        </div>

        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">Absensi Siswa</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="{{ route('absensi_siswa.create') }}" class="btn btn-primary">Tambah Absensi Siswa</a>
                            </div>
                            <div class="mb-3">
                                <form action="{{ route('absensi_siswa.index') }}" method="GET">
                                    <div class="row">
                                        <div class="col">
                                            <select name="filter" class="form-control">
                                                <option value="">Semua Jenjang</option>
                                                <option value="SMP" {{ $filter === 'SMP' ? 'selected' : '' }}>SMP
                                                </option>
                                                <option value="SMA" {{ $filter === 'SMA' ? 'selected' : '' }}>SMA
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Siswa</th>
                                        <th>Tanggal</th>
                                        <th>Kehadiran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($absensiSiswa as $absensi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $absensi->siswa->nama }}</td>
                                            <td>{{ $absensi->tanggal }}</td>
                                            <td>{{ $absensi->kehadiran }}</td>
                                            <td>
                                                <a href="{{ route('absensi_siswa.show', $absensi->id) }}"
                                                    class="btn btn-primary btn-sm">Detail</a>
                                                <a href="{{ route('absensi_siswa.edit', $absensi->id) }}"
                                                    class="btn btn-secondary btn-sm">Edit</a>
                                                <form action="{{ route('absensi_siswa.destroy', $absensi->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus absensi ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $absensiSiswa->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
