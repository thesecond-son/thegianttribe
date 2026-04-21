@extends('layouts.app')

@section('content')

{{-- Page Hero --}}
<section class="page-hero">
    <div class="page-hero__dots"></div>
    <div class="container page-hero__inner">
        <span class="section-label">Our Work</span>
        <h1>Impact &<br>Activities</h1>
        <p>
            Glimpses of our outreach programs, workshops, and community sessions —
            making a real difference in the lives of young people.
        </p>
    </div>
</section>

{{-- ============================================================
     GALLERY
============================================================ --}}
<section class="section section--sky">
    <div class="container">

        <div class="section-header centered">
            <span class="section-label">Moments</span>
            <h2 style="color:var(--navy);">From the Field</h2>
            <p>This section grows as TGT does. Check back for photos and highlights from our programs.</p>
        </div>

        {{-- Gallery Grid — replace placeholder images with real photos when available --}}
        <div class="gallery-grid">

            <div class="gallery-item gallery-item--tall">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&q=80"
                     alt="Community session">
            </div>

            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=600&q=80"
                     alt="Students learning">
            </div>

            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&q=80"
                     alt="Workshop activity">
            </div>

            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1498079022511-d15614cb1c02?w=600&q=80"
                     alt="Mentorship session">
            </div>

            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1515169067868-5387ec356754?w=600&q=80"
                     alt="Outreach program">
            </div>

            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?w=600&q=80"
                     alt="Team collaboration">
            </div>

        </div>

    </div>
</section>

{{-- ============================================================
     UPCOMING NOTE
============================================================ --}}
<section class="section section--white">
    <div class="container" style="text-align:center;">

        <div style="max-width:520px;margin-inline:auto;">
            <span class="section-label" style="justify-content:center;">Stay Connected</span>
            <h2 style="color:var(--navy);margin-bottom:16px;">More Updates Coming</h2>
            <p class="lead" style="margin-bottom:32px;">
                Follow us on social media for real-time updates, event highlights,
                and community moments.
            </p>

            <div style="display:flex;justify-content:center;flex-wrap:wrap;gap:12px;">
                <a href="https://instagram.com/thegianttribe_" target="_blank"
                   class="btn btn-outline-navy btn-sm" style="gap:8px;">
                    📸 Instagram
                </a>
                <a href="https://tiktok.com/@the.giant.tribe" target="_blank"
                   class="btn btn-outline-navy btn-sm" style="gap:8px;">
                    🎵 TikTok
                </a>
                <a href="https://t.me/thegainttribe" target="_blank"
                   class="btn btn-outline-navy btn-sm" style="gap:8px;">
                    ✈️ Telegram
                </a>
            </div>
        </div>

    </div>
</section>

@endsection
