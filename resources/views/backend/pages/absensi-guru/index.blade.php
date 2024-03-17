@extends('backend.layouts.app')
@section('title', 'Daftar Absensi Guru')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Absensi Guru</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Absensi Guru</div>

                        <div class="card-body">
                            <div class="mb-3">
                                <a href="{{ route('absensi-guru.create') }}" class="btn btn-primary">Tambah Absensi Guru</a>
                            </div>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Guru</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Kehadiran</th>
                                        <th scope="col">Jenjang</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($absensiGurus as $absensiGuru)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $absensiGuru->guru->nama }}</td>
                                            <td>{{ $absensiGuru->tanggal }}</td>
                                            <td>{{ $absensiGuru->kehadiran }}</td>
                                            <td>{{ $absensiGuru->jenjang }}</td>
                                            <td>
                                                <a href="{{ route('absensi-guru.show', $absensiGuru->id) }}"
                                                    class="btn btn-primary">Detail</a>
                                                <a href="{{ route('absensi-guru.edit', $absensiGuru->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <form action="{{ route('absensi-guru.destroy', $absensiGuru->id) }}"
                                                    method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $absensiGurus->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
