@extends('frontend.layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="container my-5" style="margin-top: 10%;">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center">Contact Us</h1>
                <p class="text-center">We'd love to hear from you. Whether you have a question about courses, pricing, or
                    anything else, our team is ready to answer all your questions.</p>

                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="margin-bottom: 20%;">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
