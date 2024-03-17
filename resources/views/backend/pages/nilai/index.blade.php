@extends('backend.layouts.app')
@section('title', 'Daftar nilai')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Daftar Nilai</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Nilai</div>

                        <div class="card-body">
                            <a href="{{ route('nilai.create') }}" class="btn btn-primary mb-3">Tambah Nilai</a>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Siswa</th>
                                        <th scope="col">Mata Pelajaran</th>
                                        <th scope="col">Nilai Ulangan Harian</th>
                                        <th scope="col">Nilai UTS</th>
                                        <th scope="col">Nilai UAS</th>
                                        <th scope="col">Sumber Nilai</th>
                                        <th scope="col">Jenjang</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nilais as $nilai)
                                        <tr>
                                            <th scope="row">{{ $nilai->id }}</th>
                                            <td>{{ $nilai->siswa->nama }}</td>
                                            <td>{{ $nilai->mataPelajaran->nama }}</td>
                                            <td>{{ $nilai->nilai_ulangan_harian }}</td>
                                            <td>{{ $nilai->nilai_ujian_tengah_semester }}</td>
                                            <td>{{ $nilai->nilai_ujian_akhir_semester }}</td>
                                            <td>{{ $nilai->sumber_nilai }}</td>
                                            <td>{{ $nilai->jenjang }}</td>
                                            <td>
                                                <a href="{{ route('nilai.show', $nilai->id) }}"
                                                    class="btn btn-info">Detail</a>
                                                <a href="{{ route('nilai.edit', $nilai->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <form action="{{ route('nilai.destroy', $nilai->id) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $nilais->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
