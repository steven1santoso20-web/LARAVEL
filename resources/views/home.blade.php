@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero">
    <div class="container hero-grid">
        <div class="hero-text">
            <p class="eyebrow">CREATIVE PORTFOLIO / 2026</p>
            <h1>Creating<br><span>Digital</span><br>Experiences.</h1>
            <p class="hero-description">
                Saya membangun website dan solusi digital yang modern,
                fungsional, dan memiliki karakter visual yang kuat.
            </p>

            <div class="hero-buttons">
                <a href="{{ route('service') }}" class="btn btn-primary">Explore Services</a>
                <a href="{{ route('contact') }}" class="btn btn-outline">Contact Me</a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="visual-box">
                <span class="visual-number">01</span>
                <div>
                    <p>FOCUS</p>
                    <h3>DESIGN<br>& DEVELOPMENT</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="statement">
    <div class="container statement-grid">
        <p class="section-label">01 / PHILOSOPHY</p>
        <div>
            <h2>Ideas become meaningful when <span>design meets technology.</span></h2>
            <p>
                Setiap karya dibuat dengan memperhatikan fungsi, visual,
                detail, dan pengalaman pengguna.
            </p>
        </div>
    </div>
</section>

<section class="home-services">
    <div class="container">
        <div class="section-heading">
            <div>
                <p class="section-label">02 / SERVICES</p>
                <h2>What I Do</h2>
            </div>
            <a href="{{ route('service') }}" class="text-link">View all services →</a>
        </div>

        <div class="service-grid">
            <article class="service-card">
                <span>01</span>
                <h3>Web Development</h3>
                <p>Website modern, responsif, dan fungsional untuk berbagai kebutuhan.</p>
            </article>

            <article class="service-card">
                <span>02</span>
                <h3>UI Design</h3>
                <p>Antarmuka yang bersih, konsisten, menarik, dan mudah digunakan.</p>
            </article>

            <article class="service-card">
                <span>03</span>
                <h3>Creative Design</h3>
                <p>Konsep visual yang membantu sebuah project memiliki identitas.</p>
            </article>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <p class="section-label">LET'S WORK TOGETHER</p>
        <h2>Have an idea?<br><span>Let's build it.</span></h2>
        <a href="{{ route('contact') }}" class="btn btn-primary">Start a Conversation</a>
    </div>
</section>

@endsection
