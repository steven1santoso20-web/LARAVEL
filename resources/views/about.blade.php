@extends('layouts.app')

@section('title', 'About')

@section('content')

<section class="page-hero">
    <div class="container">
        <p class="eyebrow">ABOUT / 03</p>
        <h1>Behind<br><span>the Work.</span></h1>
        <p>
            Mengenal lebih dekat siapa yang berada di balik setiap ide,
            desain, dan project.
        </p>
    </div>
</section>

<section class="about-section">
    <div class="container about-grid">
        <div class="about-number">03</div>

        <div>
            <p class="section-label">PROFILE</p>
            <h2>Creative mind.<br><span>Technical soul.</span></h2>
            <p>
                Saya adalah seorang pelajar yang memiliki ketertarikan pada
                teknologi, pemrograman, desain, dan pengembangan website.
                Saya senang mempelajari hal baru dan mengubah ide menjadi
                karya digital yang dapat digunakan.
            </p>
        </div>
    </div>
</section>

<section class="skills">
    <div class="container">
        <p class="section-label">SKILLS</p>

        <div class="skill-grid">
            <div><span>01</span><h3>HTML / CSS</h3></div>
            <div><span>02</span><h3>PHP / Laravel</h3></div>
            <div><span>03</span><h3>UI / UX</h3></div>
            <div><span>04</span><h3>Creative Design</h3></div>
        </div>
    </div>
</section>

@endsection
