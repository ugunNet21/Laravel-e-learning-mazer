@extends('backend.layouts.app')
@section('title', 'Tambah Absensi Guru')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Tambah Absensi Guru</h3>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Tambah Absensi Guru</div>

                        <div class="card-body">
                            <form action="{{ route('absensi-guru.store') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="guru_id">Nama Guru:</label>
                                    <select class="form-control" id="guru_id" name="guru_id">
                                        @foreach ($gurus as $guru)
                                            <option value="{{ $guru->id }}">{{ $guru->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="tanggal">Tanggal:</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                                </div>

                                <div class="form-group">
                                    <label for="kehadiran">Kehadiran:</label>
                                    <select class="form-control" id="kehadiran" name="kehadiran">
                                        <option value="hadir">Hadir</option>
                                        <option value="tidak_hadir">Tidak Hadir</option>
                                        <option value="izin">Izin</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="jenjang">Jenjang:</label>
                                    <select class="form-control" id="jenjang" name="jenjang">
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
