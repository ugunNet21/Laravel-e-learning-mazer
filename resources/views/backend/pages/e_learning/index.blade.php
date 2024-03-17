<!-- resources/views/e_learning/index.blade.php -->

@extends('backend.layouts.app')
@section('title', 'E-Learning')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Daftar E -Learning</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Daftar E-Learning</div>

                        <div class="card-body">
                            <a href="{{ route('e_learning.create') }}" class="btn btn-primary mb-3">Tambah E-Learning</a>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Tautan</th>
                                        <th scope="col">Jenjang</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($eLearnings as $eLearning)
                                        <tr>
                                            <td>{{ $eLearning->judul }}</td>
                                            <td>{{ $eLearning->deskripsi }}</td>
                                            <td>{{ $eLearning->tautan }}</td>
                                            <td>{{ $eLearning->jenjang }}</td>
                                            <td>
                                                <a href="{{ route('e_learning.show', $eLearning) }}"
                                                    class="btn btn-info btn-sm">Detail</a>
                                                <a href="{{ route('e_learning.edit', $eLearning) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('e_learning.destroy', $eLearning) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus E-Learning ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">Tidak ada data E-Learning.</td>
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
