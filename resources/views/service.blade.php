@extends('layouts.app')

@section('title', 'Service')

@section('content')

<section class="page-hero">
    <div class="container">
        <p class="eyebrow">SERVICES / 02</p>
        <h1>What I<br><span>Can Do.</span></h1>
        <p>
            Layanan digital yang menggabungkan kreativitas, teknologi,
            dan perhatian terhadap detail.
        </p>
    </div>
</section>

<section class="service-list">
    <div class="container">
        <article class="service-row">
            <span>01</span>
            <div>
                <h2>Web Development</h2>
                <p>Membangun website yang responsif, cepat, terstruktur, dan mudah digunakan.</p>
            </div>
            <strong>→</strong>
        </article>

        <article class="service-row">
            <span>02</span>
            <div>
                <h2>UI / UX Design</h2>
                <p>Merancang tampilan dan pengalaman pengguna yang sederhana namun berkarakter.</p>
            </div>
            <strong>→</strong>
        </article>

        <article class="service-row">
            <span>03</span>
            <div>
                <h2>System Development</h2>
                <p>Membuat solusi sistem digital yang terorganisir sesuai kebutuhan project.</p>
            </div>
            <strong>→</strong>
        </article>

        <article class="service-row">
            <span>04</span>
            <div>
                <h2>Creative Design</h2>
                <p>Mengembangkan konsep visual, layout, dan identitas digital yang konsisten.</p>
            </div>
            <strong>→</strong>
        </article>
    </div>
</section>

@endsection
