@extends('backend.layouts.app')
@section('title', 'Detail Soal')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Detail Soal</h3>
        </div>
        <div class="page-content">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right mb-2">
                        <a class="btn btn-primary" href="{{ route('soal.index') }}"> Back</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4>Soal Detail</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>Guru:</strong>
                        {{ $soal->guru->nama }}
                    </div>
                    <div class="form-group">
                        <strong>Mata Pelajaran:</strong>
                        {{ $soal->mataPelajaran->nama }}
                    </div>
                    <div class="form-group">
                        <strong>Jenis Soal:</strong>
                        {{ $soal->jenis_soal }}
                    </div>
                    <div class="form-group">
                        <strong>Pertanyaan:</strong>
                        {{ $soal->pertanyaan }}
                    </div>
                    <div class="form-group">
                        <strong>Jenjang:</strong>
                        {{ $soal->jenjang }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
