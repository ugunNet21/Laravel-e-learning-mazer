@extends('backend.layouts.app')

@section('title', 'Edit Jenjang')

@section('content')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Edit Jenjang</h3>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('jenjang.update', $jenjang->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Jenjang</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $jenjang->nama }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="Aktif" {{ $jenjang->status == 'Aktif' ? 'selected' : '' }}>Aktif
                                    </option>
                                    <option value="Nonaktif" {{ $jenjang->status == 'Nonaktif' ? 'selected' : '' }}>
                                        Nonaktif
                                    </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
