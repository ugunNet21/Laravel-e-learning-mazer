@extends('backend.layouts.app')
@section('title', 'Detail Jawaban')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Detail Jawaban</h3>
        </div>

        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Detail Jawaban</div>

                        <div class="card-body">
                            <div class="form-group">
                                <strong>Soal:</strong>
                                {{ $jawaban->soal->pertanyaan }}
                            </div>
                            <div class="form-group">
                                <strong>Opsi Jawaban:</strong>
                                {{ $jawaban->opsi_jawaban }}
                            </div>
                            <div class="form-group">
                                <strong>Jenjang:</strong>
                                {{ $jawaban->jenjang }}
                            </div>
                            <a href="{{ route('jawaban.index') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
