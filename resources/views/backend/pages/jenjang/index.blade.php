@extends('backend.layouts.app')

@section('title', 'Jenjang')

@section('content')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Jenjang</h3>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List Jenjang</h4>
                        <div class="card-header-action">
                            <a href="{{ route('jenjang.create') }}" class="btn btn-primary">Tambah Jenjang</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jenjangs as $jenjang)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $jenjang->nama }}</td>
                                        <td>{{ $jenjang->status }}</td>
                                        <td>
                                            <a href="{{ route('jenjang.show', $jenjang->id) }}"
                                                class="btn btn-primary">Detail</a>
                                            <a href="{{ route('jenjang.edit', $jenjang->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('jenjang.destroy', $jenjang->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this jenjang?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
