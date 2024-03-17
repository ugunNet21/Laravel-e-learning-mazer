@extends('backend.layouts.app')
@section('title', 'Dashboard | Jawaban')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Daftar Jawaban</h3>
        </div>
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('jawaban.create') }}"> Buat Jawaban</a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Soal</th>
                                        <th scope="col">Opsi Jawaban</th>
                                        <th scope="col">Jenjang</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jawabans as $jawaban)
                                        <tr>
                                            <th scope="row">{{ $jawaban->id }}</th>
                                            <td>{{ $jawaban->soal->pertanyaan }}</td>
                                            <td>{{ $jawaban->opsi_jawaban }}</td>
                                            <td>{{ $jawaban->jenjang }}</td>
                                            <td>
                                                <a href="{{ route('jawaban.show', $jawaban->id) }}"
                                                    class="btn btn-primary">View</a>
                                                <a href="{{ route('jawaban.edit', $jawaban->id) }}"
                                                    class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('jawaban.destroy', $jawaban->id) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $jawabans->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
