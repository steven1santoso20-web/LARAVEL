@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<section class="page-hero">
    <div class="container">
        <p class="eyebrow">CONTACT / 04</p>
        <h1>Let's Create<br><span>Something.</span></h1>
        <p>
            Punya ide atau project? Hubungi saya dan mari mulai percakapan.
        </p>
    </div>
</section>

<section class="contact-section">
    <div class="container contact-grid">

        <div>
            <p class="section-label">GET IN TOUCH</p>
            <h2>Let's talk.</h2>

            <div class="contact-info">
                <div>
                    <span>EMAIL</span>
                    <p>hello@aurelis.dev</p>
                </div>

                <div>
                    <span>GITHUB</span>
                    <p>github.com/username</p>
                </div>

                <div>
                    <span>LOCATION</span>
                    <p>Indonesia</p>
                </div>
            </div>
        </div>

        <form class="contact-form">
            <label>Name</label>
            <input type="text" placeholder="Your name">

            <label>Email</label>
            <input type="email" placeholder="your@email.com">

            <label>Message</label>
            <textarea rows="6" placeholder="Tell me about your project..."></textarea>

            <button type="submit" class="btn btn-primary">Send Message →</button>
        </form>

    </div>
</section>

@endsection
