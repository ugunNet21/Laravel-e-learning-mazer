<!-- resources/views/kelas/index.blade.php -->

@extends('backend.layouts.app')
@section('title', 'Kelas')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Daftar Kelas</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Daftar Kelas</div>

                        <div class="card-body">
                            <a href="{{ route('kelas_admin.create') }}" class="btn btn-primary mb-3">Tambah Kelas</a>

                            @if ($kelas_admin->isEmpty())
                                <p>Tidak ada data kelas.</p>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Tingkat</th>
                                                <th scope="col">Jenjang</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kelas_admin as $kelasItem)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $kelasItem->nama }}</td>
                                                    <td>{{ $kelasItem->tingkat }}</td>
                                                    <td>{{ $kelasItem->jenjang }}</td>
                                                    <td>
                                                        <a href="{{ route('kelas_admin.show', $kelasItem) }}"
                                                            class="btn btn-info btn-sm">Detail</a>
                                                        <a href="{{ route('kelas_admin.edit', $kelasItem) }}"
                                                            class="btn btn-primary btn-sm">Edit</a>
                                                        <form action="{{ route('kelas_admin.destroy', $kelasItem) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus kelas ini?')">Hapus</button>
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
