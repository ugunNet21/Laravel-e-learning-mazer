<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            @if(View::hasSection('breadcrumb'))
                @yield('breadcrumb')
            @else
                <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
            @endif
        </ol>
    </div>
</nav>
{{-- @section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Blog</li>
@endsection --}}
