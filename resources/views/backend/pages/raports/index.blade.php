@extends('backend.layouts.app')
@section('title', 'Daftar raport')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Daftar Raport</h3>
        </div>

        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Daftar raport</div>

                        <div class="card-body">
                            <form method="GET" action="{{ route('raports.index') }}">
                                <div class="form-group row">
                                    <label for="jenjang" class="col-md-2 col-form-label text-md-right">Jenjang:</label>
                                    <div class="col-md-4">
                                        <select id="jenjang" class="form-control" name="jenjang">
                                            <option value="">All</option>
                                            <option value="SMP" {{ request('jenjang') == 'SMP' ? 'selected' : '' }}>SMP
                                            </option>
                                            <option value="SMA" {{ request('jenjang') == 'SMA' ? 'selected' : '' }}>SMA
                                            </option>
                                        </select>
                                    </div>

                                    <label for="tahun_ajaran" class="col-md-2 col-form-label text-md-right">Tahun
                                        Ajaran:</label>
                                    <div class="col-md-4">
                                        <input id="tahun_ajaran" type="text" class="form-control" name="tahun_ajaran"
                                            value="{{ request('tahun_ajaran') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="semester" class="col-md-2 col-form-label text-md-right">Semester:</label>
                                    <div class="col-md-4">
                                        <input id="semester" type="text" class="form-control" name="semester"
                                            value="{{ request('semester') }}">
                                    </div>

                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                        <a href="{{ route('raports.index') }}" class="btn btn-secondary">Reset</a>
                                        <a href="{{ route('raports.create') }}" class="btn btn-success">Add Raport</a>
                                    </div>
                                </div>
                            </form>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Siswa</th>
                                        <th>Semester</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Rata-rata Nilai</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($raports as $raport)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $raport->siswa->nama }}</td>
                                            <td>{{ $raport->semester }}</td>
                                            <td>{{ $raport->tahun_ajaran }}</td>
                                            <td>{{ $raport->rata_rata_nilai }}</td>
                                            <td>{{ $raport->keterangan }}</td>
                                            <td>
                                                <a href="{{ route('raports.show', $raport->id) }}"
                                                    class="btn btn-info btn-sm">View</a>
                                                <a href="{{ route('raports.edit', $raport->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('raports.destroy', $raport->id) }}" method="POST"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $raports->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
