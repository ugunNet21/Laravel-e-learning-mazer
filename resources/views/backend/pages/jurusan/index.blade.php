@extends('backend.layouts.app')
@section('title', 'Jurusan')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Daftar Jurusan</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Daftar Jurusan</h4>
                            <div class="card-header-action">
                                <a href="{{ route('jurusan.create') }}" class="btn btn-primary">Tambah Jurusan</a>
                            </div>
                        </div>
                        @if ($jurusans->isEmpty())
                            <div class="card-body">
                                <p class="text-muted">Tidak ada data jurusan.</p>
                            </div>
                        @else
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jurusans as $jurusan)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{ $jurusan->nama }}</td>
                                                    <td>{{ $jurusan->status }}</td>
                                                    <td>
                                                        <a href="{{ route('jurusan.show', $jurusan) }}"
                                                            class="btn btn-info btn-sm">Detail</a>
                                                        <a href="{{ route('jurusan.edit', $jurusan) }}"
                                                            class="btn btn-primary btn-sm">Edit</a>
                                                        <form action="{{ route('jurusan.destroy', $jurusan) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus jurusan ini?')">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
