@extends('frontend.layouts.app')

@section('title', 'Blog')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="margin-top: 8%;">
        <div class="container">
            <ol>
                <li><a href="/">Home</a></li>
                {{-- <li><a href="#">Blog</a></li> --}}
                <li>Post</li>
                {{-- {{ $item->title }} --}}
            </ol>
            {{-- <h2>Post</h2> --}}
            {{-- {{ $item->title }} --}}
        </div>
    </section><!-- End Breadcrumbs -->
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
