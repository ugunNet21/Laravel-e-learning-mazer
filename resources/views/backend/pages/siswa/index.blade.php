@extends('backend.layouts.app')
@section('title')
    Dashboard | Siswa
@endsection
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Daftar Siswa</h3>
        </div>
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-20">
                    <div class="card">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Jenjang</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswas as $siswa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $siswa->nama }}</td>
                                            <td>{{ $siswa->jenis_kelamin }}</td>
                                            <td>{{ $siswa->tanggal_lahir }}</td>
                                            <td>{{ $siswa->alamat }}</td>
                                            <td>{{ $siswa->jenjang }}</td>
                                            <td>
                                                <a href="{{ route('siswa.show', $siswa->id) }}"
                                                    class="btn btn-primary btn-sm">Detail</a>
                                                <a href="{{ route('siswa.edit', $siswa->id) }}"
                                                    class="btn btn-success btn-sm">Edit</a>
                                                <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $siswas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
