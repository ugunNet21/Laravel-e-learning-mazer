@extends('frontend.layouts.app')
@section('title','Event')
@section('content')
     <!-- #EVENT-->
 <section class="section event" id="event" aria-label="event" style="margin-top: 10%;">
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

@endsection
