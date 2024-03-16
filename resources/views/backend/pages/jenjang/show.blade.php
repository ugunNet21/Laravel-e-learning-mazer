@extends('backend.layouts.app')

@section('title', 'Detail Jenjang')

@section('content')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Detail Jenjang</h3>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nama Jenjang</h5>
                        <p class="card-text">{{ $jenjang->nama }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Status</h5>
                        <p class="card-text">{{ $jenjang->status }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
