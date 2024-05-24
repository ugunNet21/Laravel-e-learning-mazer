@extends('frontend.layouts.app')
@yield('title')
@section('content')
    <main>
        <article>
            <!-- #HERO-->
            <section class="hero" id="home" aria-label="hero"
                style="background-image: url('{{ asset('frontend/assets/images/hero-bg.jpg') }}')">
                <div class="container">

                    <div class="hero-content">

                        <p class="section-subtitle">Better Learning Future With Us</p>

                        <h2 class="h1 hero-title">Education Is About Academic Excellence</h2>

                        <p class="hero-text">
                            Sed eu volutpat arcu, a tincidunt nulla quam, feugiat sit amet ipsum a, dapibus porta velit.
                        </p>

                        <a href="#" class="btn btn-primary">
                            <span class="span">Get Started Today</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>

                    <figure class="hero-banner">

                        <img src="{{ asset('frontend/assets/images/hero-banner.png') }}" width="500" height="500"
                            loading="lazy" alt="hero image" class="w-100">

                        <img src="{{ asset('frontend/assets/images/hero-abs-1.png') }}" width="318" height="352"
                            loading="lazy" aria-hidden="true" class="abs-img abs-img-1">

                        <img src="{{ asset('frontend/assets/images/hero-abs-2.png') }}" width="160" height="160"
                            loading="lazy" aria-hidden="true" class="abs-img abs-img-2">

                    </figure>

                </div>
            </section>

            <!-- #CATEGORY-->
            <section class="section category" aria-label="category">
                <div class="container">

                    <p class="section-subtitle">Course Categories</p>

                    <h2 class="h2 section-title">Popular Topics To Learn</h2>

                    <ul class="grid-list">

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">Personal Development</a>
                                    </h3>

                                    <span class="card-meta">39 Course</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="file-tray-full-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">Human Research</a>
                                    </h3>

                                    <span class="card-meta">24 Course</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="color-palette-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">Art & Design</a>
                                    </h3>

                                    <span class="card-meta">39 Course</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="layers-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">Business Management</a>
                                    </h3>

                                    <span class="card-meta">39 Course</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="laptop-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">Web Development</a>
                                    </h3>

                                    <span class="card-meta">39 Course</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="thumbs-up-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">Lifestyle</a>
                                    </h3>

                                    <span class="card-meta">39 Course</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="headset-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">Digital Marketing</a>
                                    </h3>

                                    <span class="card-meta">39 Course</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="server-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">Data Sciences</a>
                                    </h3>

                                    <span class="card-meta">39 Course</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="medkit-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">Health & Fitness</a>
                                    </h3>

                                    <span class="card-meta">39 Course</span>
                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>

            <!-- #ABOUT-->
            <section class="section about" id="about" aria-label="about">
                <div class="container">

                    <figure class="about-banner">

                        <img src="{{ asset('frontend/assets/images/about-banner.jpg') }}" width="450" height="590"
                            loading="lazy" alt="about banner" class="w-100 about-img">

                        <img src="{{ asset('frontend/assets/images/about-abs-1.jpg') }}" width="188" height="242"
                            loading="lazy" aria-hidden="true" class="abs-img abs-img-1">

                        <img src="{{ asset('frontend/assets/images/about-abs-2.jpg') }}" width="150" height="200"
                            loading="lazy" aria-hidden="true" class="abs-img abs-img-2">

                    </figure>

                    <div class="about-content">

                        <p class="section-subtitle">Who We Are</p>

                        <h2 class="h2 section-title">We Offer The Best Carrier</h2>

                        <ul class="about-list">

                            <li class="about-item">

                                <div class="item-icon item-icon-1">
                                    <img src="{{ asset('frontend/assets/images/about-icon-1.png') }}" width="30"
                                        height="30" loading="lazy" aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Industry Expert Instructor</h3>

                                    <p class="item-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmoded tempor
                                        incididunt dolore magna
                                        aliqua.
                                    </p>
                                </div>

                            </li>

                            <li class="about-item">

                                <div class="item-icon item-icon-2">
                                    <img src="{{ asset('frontend/assets/images/about-icon-2.png') }}" width="30"
                                        height="30" loading="lazy" aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Up-to-Date Course Content</h3>

                                    <p class="item-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmoded tempor
                                        incididunt dolore magna
                                        aliqua.
                                    </p>
                                </div>

                            </li>

                            <li class="about-item">

                                <div class="item-icon item-icon-3">
                                    <img src="{{ asset('frontend/assets/images/about-icon-3.png') }}" width="30"
                                        height="30" loading="lazy" aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Biggest Student Community</h3>

                                    <p class="item-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmoded tempor
                                        incididunt dolore magna
                                        aliqua.
                                    </p>
                                </div>

                            </li>

                        </ul>

                        <a href="#" class="btn btn-primary">
                            <span class="span">Know About Us</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>

                </div>
            </section>

            <!--- #COURSE-->
            <section class="section course" id="courses" aria-label="course"
                style="background-image: url('{{ asset('frontend/assets/images/course-bg.jpg') }}')">
                <div class="container">

                    <p class="section-subtitle">Popular Courses</p>

                    <h2 class="h2 section-title">Our Popular Courses</h2>

                    <ul class="grid-list">

                        <li>
                            <div class="course-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/course-1.jpg') }}" width="370"
                                        height="270" loading="lazy" alt="Competitive Strategy law for all students"
                                        class="img-cover">
                                </figure>

                                <div class="card-actions">

                                    <span class="badge">Intermediate</span>

                                    <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                        <ion-icon name="heart"></ion-icon>
                                    </button>

                                </div>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">35 Lessons</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
                                        </li>

                                    </ul>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Competitive Strategy law for all
                                            students</a>
                                    </h3>

                                    <div class="rating-wrapper">

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <span class="rating-text">(18 Review)</span>

                                    </div>

                                    <div class="card-footer">

                                        <div class="card-price">
                                            <span class="span">$29.00</span>

                                            <del class="del">$39.00</del>
                                        </div>

                                        <div class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">47 Students</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="course-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/course-2.jpg') }}" width="370"
                                        height="270" loading="lazy"
                                        alt="Machine Learning A-Z: Hands-On Python and java" class="img-cover">
                                </figure>

                                <div class="card-actions">

                                    <span class="badge">Advanced</span>

                                    <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                        <ion-icon name="heart"></ion-icon>
                                    </button>

                                </div>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">48 Lessons</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
                                        </li>

                                    </ul>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Machine Learning A-Z: Hands-On Python and
                                            java</a>
                                    </h3>

                                    <div class="rating-wrapper">

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <span class="rating-text">(18 Review)</span>

                                    </div>

                                    <div class="card-footer">

                                        <div class="card-price">
                                            <span class="span">Free</span>
                                        </div>

                                        <div class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">65 Students</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="course-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/course-3.jpg') }}" width="370"
                                        height="270" loading="lazy" alt="Achieving Advanced in Insights with Big"
                                        class="img-cover">
                                </figure>

                                <div class="card-actions">

                                    <span class="badge">Basic</span>

                                    <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                        <ion-icon name="heart"></ion-icon>
                                    </button>

                                </div>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">80 Lessons</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
                                        </li>

                                    </ul>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Achieving Advanced in Insights with
                                            Big</a>
                                    </h3>

                                    <div class="rating-wrapper">

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <span class="rating-text">(18 Review)</span>

                                    </div>

                                    <div class="card-footer">

                                        <div class="card-price">
                                            <span class="span">$59.00</span>

                                            <del class="del">$69.00</del>
                                        </div>

                                        <div class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">42 Students</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="course-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/course-4.jpg') }}" width="370"
                                        height="270" loading="lazy"
                                        alt="Education Makes A Person A Responsible Citizen" class="img-cover">
                                </figure>

                                <div class="card-actions">

                                    <span class="badge">Intermediate</span>

                                    <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                        <ion-icon name="heart"></ion-icon>
                                    </button>

                                </div>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">31 Lessons</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
                                        </li>

                                    </ul>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Education Makes A Person A Responsible
                                            Citizen</a>
                                    </h3>

                                    <div class="rating-wrapper">

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <span class="rating-text">(18 Review)</span>

                                    </div>

                                    <div class="card-footer">

                                        <div class="card-price">
                                            <span class="span">$49.00</span>

                                            <del class="del">$59.00</del>
                                        </div>

                                        <div class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">46 Students</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="course-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/course-5.jpg') }}" width="370"
                                        height="270" loading="lazy" alt="Building A Better World One Student At A Time"
                                        class="img-cover">
                                </figure>

                                <div class="card-actions">

                                    <span class="badge">Advanced</span>

                                    <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                        <ion-icon name="heart"></ion-icon>
                                    </button>

                                </div>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">36 Lessons</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
                                        </li>

                                    </ul>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Building A Better World One Student At A
                                            Time</a>
                                    </h3>

                                    <div class="rating-wrapper">

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <span class="rating-text">(18 Review)</span>

                                    </div>

                                    <div class="card-footer">

                                        <div class="card-price">
                                            <span class="span">$29.00</span>

                                            <del class="del">$39.00</del>
                                        </div>

                                        <div class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">91 Students</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="course-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/course-6.jpg') }}" width="370"
                                        height="270" loading="lazy" alt="Education is About Forming Faithful Disciples"
                                        class="img-cover">
                                </figure>

                                <div class="card-actions">

                                    <span class="badge">Basic</span>

                                    <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                        <ion-icon name="heart"></ion-icon>
                                    </button>

                                </div>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">21 Lessons</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
                                        </li>

                                    </ul>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Education is About Forming Faithful
                                            Disciples</a>
                                    </h3>

                                    <div class="rating-wrapper">

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <span class="rating-text">(18 Review)</span>

                                    </div>

                                    <div class="card-footer">

                                        <div class="card-price">
                                            <span class="span">$79.00</span>

                                            <del class="del">$89.00</del>
                                        </div>

                                        <div class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">22 Students</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                    </ul>

                    <a href="#" class="btn btn-primary">
                        <span class="span">View All Courses</span>

                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>

                </div>
            </section>

            <!-- #CTA-->
            <section class="section cta" aria-label="workshop"
                style="background-image: url('{{ asset('frontend/assets/images/cta-bg.png') }}')">
                <div class="container">

                    <figure class="cta-banner">
                        <img src="{{ asset('frontend/assets/images/cta-banner.jpg') }}" width="580" height="380"
                            loading="lazy" alt="cta banner" class="img-cover">
                    </figure>

                    <div class="cta-content">

                        <p class="section-subtitle">Free Workshop</p>

                        <h2 class="h2 section-title">Join Our Free Workshops</h2>

                        <p class="section-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit amet, consect adipi scing elit,
                            sed do
                            eiusmod tempor
                            incididunt ut sed do eiusmod tempor incididunt ut labore et dolore aliqua.
                        </p>

                        <a href="#" class="btn btn-secondary">
                            <span class="span">Upcomming Workshop</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>

                </div>
            </section>

            <!-- #EVENT-->
            <section class="section event" id="event" aria-label="event">
                <div class="container">

                    <p class="section-subtitle">Upcomming Event</p>

                    <h2 class="h2 section-title">Let’s Join Our Community</h2>

                    <ul class="grid-list">

                        <li>
                            <div class="event-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/event-1.jpg') }}" width="370"
                                        height="250" loading="lazy"
                                        alt="Innovation & Technological Entrepreneurship Team" class="img-cover">
                                </figure>

                                <time class="badge" datetime="2022-12-04">04 Dec 2022</time>

                                <div class="card-content">

                                    <address class="card-address">
                                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">Alpaca Way Anaheim, CA 92805</span>
                                    </address>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Innovation & Technological
                                            Entrepreneurship Team</a>
                                    </h3>

                                    <a href="#" class="btn-link">
                                        <span class="span">Get Ticket</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/event-2.jpg') }}" width="370"
                                        height="250" loading="lazy"
                                        alt="Virtual Spring Part-time Jobs Fair for Student" class="img-cover">
                                </figure>

                                <time class="badge" datetime="2022-10-30">30th Oct 2022</time>

                                <div class="card-content">

                                    <address class="card-address">
                                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">Ritter Avenue Detroit, MI 48226</span>
                                    </address>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Virtual Spring Part-time Jobs Fair for
                                            Student</a>
                                    </h3>

                                    <a href="#" class="btn-link">
                                        <span class="span">Get Ticket</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/event-3.jpg') }}" width="370"
                                        height="250" loading="lazy"
                                        alt="Explorations of Regional Chief Executive Network" class="img-cover">
                                </figure>

                                <time class="badge" datetime="2022-09-18">18th Sep 2022</time>

                                <div class="card-content">

                                    <address class="card-address">
                                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">Stout Street York, PA 17401</span>
                                    </address>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Explorations of Regional Chief Executive
                                            Network</a>
                                    </h3>

                                    <a href="#" class="btn-link">
                                        <span class="span">Get Ticket</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>

            <!-- #NEWSLETTER-->
            <section class="section newsletter" aria-label="newsletter"
                style="background-image: url('{asset('frontend/assets/images/newsletter-bg.jpg')}')">
                <div class="container">

                    <p class="section-subtitle">Subscribe Newsletter</p>

                    <h2 class="h2 section-title">Get Every Latest News</h2>

                    <form action="" class="newsletter-form">

                        <div class="input-wrapper">
                            <input type="email" name="email_address" aria-label="email"
                                placeholder="Enter your mail address" required class="email-field">

                            <ion-icon name="mail-open-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <span class="span">Subscribe</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </button>

                    </form>

                </div>
            </section>

        </article>
    </main>

    <!--- #BACK TO TOP-->
    <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
        <ion-icon name="arrow-up"></ion-icon>
    </a>
@endsection
