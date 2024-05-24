@extends('frontend.layouts.app')

@section('title', 'Blog')
@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Blog</li>
@endsection

@section('content')
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <section class="section blog" id="blog" aria-label="blog">
                        <div class="container">
                            <h2 class="h2 section-title">Our Latest Blog Posts</h2>
                            <div class="row">
                                {{-- @foreach ($posts as $post) --}}
                                    <div class="col-md-6">
                                        <div class="card mb-4">
                                            <img src="" class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h3 class="card-title"></h3>
                                                <p class="card-text"></p>
                                                <a href="" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                {{-- @endforeach --}}
                            </div>
                            <div class="pagination">

                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4">
                    {{-- @include('frontend.partials.sidebar') --}}
                </div>
            </div>
        </div>
    </div>
@endsection
