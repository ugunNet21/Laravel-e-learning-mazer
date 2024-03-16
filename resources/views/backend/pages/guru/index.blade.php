<!-- resources/views/guru/index.blade.php -->

@extends('backend.layouts.app')
@section('title', 'Daftar guru')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Daftar Guru</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Daftar Guru</div>

                        <div class="card-body">
                            <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Tambah Guru</a>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Mata Pelajaran</th>
                                        <th scope="col">Jenjang</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($gurus as $guru)
                                        <tr>
                                            <td>{{ $guru->nama }}</td>
                                            <td>{{ $guru->mata_pelajaran }}</td>
                                            <td>{{ $guru->jenjang }}</td>
                                            <td>
                                                <a href="{{ route('guru.show', $guru) }}"
                                                    class="btn btn-info btn-sm">Detail</a>
                                                <a href="{{ route('guru.edit', $guru) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('guru.destroy', $guru) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus guru ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">Tidak ada guru.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
