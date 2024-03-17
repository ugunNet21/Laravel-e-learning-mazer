@extends('backend.layouts.app')
@section('title', 'Jawaban')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Edit Jawaban</h3>
        </div>
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
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

                            <form action="{{ route('jawaban.update', $jawaban->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="soal_id">Soal</label>
                                    <select name="soal_id" id="soal_id" class="form-control">
                                        @foreach ($soals as $soal)
                                            <option value="{{ $soal->id }}"
                                                {{ $soal->id == $jawaban->soal_id ? 'selected' : '' }}>
                                                {{ $soal->pertanyaan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="opsi_jawaban">Opsi Jawaban</label>
                                    <input type="text" name="opsi_jawaban" id="opsi_jawaban" class="form-control"
                                        value="{{ $jawaban->opsi_jawaban }}">
                                </div>
                                <div class="form-group">
                                    <label for="jenjang">Jenjang</label>
                                    <select name="jenjang" id="jenjang" class="form-control">
                                        <option value="SMP" {{ $jawaban->jenjang == 'SMP' ? 'selected' : '' }}>SMP
                                        </option>
                                        <option value="SMA" {{ $jawaban->jenjang == 'SMA' ? 'selected' : '' }}>SMA
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('jawaban.index') }}" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
