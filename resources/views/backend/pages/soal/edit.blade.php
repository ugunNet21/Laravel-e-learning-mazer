@extends('backend.layouts.app')
@section('title', 'Edit Soal')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Edit Soal</h3>
        </div>
        <div class="page-content">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right mb-2">
                        <a class="btn btn-primary" href="{{ route('soal.index') }}"> Back</a>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('soal.update', $soal->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Guru:</strong>
                            <select class="form-control" name="guru_id">
                                @foreach ($gurus as $guru)
                                    <option value="{{ $guru->id }}" {{ $soal->guru_id == $guru->id ? 'selected' : '' }}>{{ $guru->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Mata Pelajaran:</strong>
                            <select class="form-control" name="mata_pelajaran_id">
                                @foreach ($mataPelajarans as $mataPelajaran)
                                    <option value="{{ $mataPelajaran->id }}" {{ $soal->mata_pelajaran_id == $mataPelajaran->id ? 'selected' : '' }}>{{ $mataPelajaran->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jenis Soal:</strong>
                            <select class="form-control" name="jenis_soal">
                                <option value="essay" {{ $soal->jenis_soal == 'essay' ? 'selected' : '' }}>Essay</option>
                                <option value="pilihan_ganda" {{ $soal->jenis_soal == 'pilihan_ganda' ? 'selected' : '' }}>Pilihan Ganda</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Pertanyaan:</strong>
                            <textarea class="form-control" style="height:150px" name="pertanyaan" placeholder="Pertanyaan">{{ $soal->pertanyaan }}</textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jenjang:</strong>
                            <select class="form-control" name="jenjang">
                                <option value="SMP" {{ $soal->jenjang == 'SMP' ? 'selected' : '' }}>SMP</option>
                                <option value="SMA" {{ $soal->jenjang == 'SMA' ? 'selected' : '' }}>SMA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
