<!--custom css link-->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

<!--google font link-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!--preload images-->
<link rel="preload" as="image" href="{{ asset('frontend/assets/images/hero-banner.png') }}">
<link rel="preload" as="image" href="{{ asset('frontend/assets/images/hero-abs-1.png') }}"
    media="min-width(768px)">
<link rel="preload" as="image" href="{{ asset('frontend/assets/images/hero-abs-2.png') }}"
    media="min-width(768px)">
<style>
    /* style Dashboard dan logout frontend */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-toggle {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        right: 0;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-menu .dropdown-item {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }
    /* end */
</style>
