<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon-->
    <link rel="shortcut icon" href="{{ asset('frontend/favicon.svg') }}" type="image/svg+xml">

    <title>@yield('title', 'Home')</title>
    @include('frontend.partials.styles')
</head>

<body>
    <!--- #HEADER-->
    <header class="header" data-header>
        @include('frontend.partials.navbar')
    </header>
    <!--- #SEARCH BOX-->
    <div class="search-container" data-search-box>
        <div class="container">

            <button class="search-close-btn" aria-label="Close search" data-search-toggler>
                <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="search-wrapper">
                <input type="search" name="search" placeholder="Search Here..." aria-label="Search"
                    class="search-field">

                <button class="search-submit" aria-label="Submit" data-search-toggler>
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </div>

        </div>
    </div>
    @yield('content')
    <!--#FOOTER-->
    <footer class="footer">
        @include('frontend.partials.footer')
    </footer>
    @include('frontend.partials.scripts')
</body>

</html>
