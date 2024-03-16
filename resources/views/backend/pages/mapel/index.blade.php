<!-- resources/views/mapel/index.blade.php -->

@extends('backend.layouts.app')
@section('title', 'Mata pelajaran')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Mata Pelajaran</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Daftar Mata Pelajaran</div>

                        <div class="card-body">
                            <a href="{{ route('mapel.create') }}" class="btn btn-primary mb-3">Tambah Mata Pelajaran</a>

                            @if ($mataPelajarans->isEmpty())
                                <p>Tidak ada data mata pelajaran.</p>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mataPelajarans as $mataPelajaran)
                                                <tr>
                                                    <td>{{ $mataPelajaran->nama }}</td>
                                                    <td>{{ $mataPelajaran->deskripsi }}</td>
                                                    <td>{{ $mataPelajaran->status }}</td>
                                                    <td>
                                                        <a href="{{ route('mapel.show', $mataPelajaran) }}"
                                                            class="btn btn-info btn-sm">Detail</a>
                                                        <a href="{{ route('mapel.edit', $mataPelajaran) }}"
                                                            class="btn btn-primary btn-sm">Edit</a>
                                                        <form action="{{ route('mapel.destroy', $mataPelajaran) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus mata pelajaran ini?')">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
