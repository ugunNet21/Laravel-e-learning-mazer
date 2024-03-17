@extends('backend.layouts.app')
@section('title', 'Dashboard | Soal')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Daftar Soal</h3>
        </div>
        <div class="page-content">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('soal.create') }}"> Buat Soal</a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Guru</th>
                    <th>Mata Pelajaran</th>
                    <th>Jenis Soal</th>
                    <th>Pertanyaan</th>
                    <th>Jenjang</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($soals as $soal)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $soal->guru->nama }}</td>
                        <td>{{ $soal->mataPelajaran->nama }}</td>
                        <td>{{ $soal->jenis_soal }}</td>
                        <td>{{ $soal->pertanyaan }}</td>
                        <td>{{ $soal->jenjang }}</td>
                        <td>
                            <form action="{{ route('soal.destroy', $soal->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('soal.show', $soal->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('soal.edit', $soal->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

            {!! $soals->links() !!}
        </div>
    </div>
@endsection
