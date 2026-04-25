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

{{-- Gallery --}}
<section class="section section--sky">
    <div class="container">

        <div class="section-header centered">
            <span class="section-label">Moments</span>
            <h2 style="color:var(--navy);">From the Field</h2>
            <p>Real moments from our programs, outreach sessions, and community activities.</p>
        </div>

        {{-- Tabs --}}
        <div class="gallery-tabs">
            @foreach($groups as $label => $images)
                <button
                    class="gallery-tab {{ $loop->first ? 'active' : '' }}"
                    data-tab="tab-{{ $loop->index }}">
                    <i class="bi bi-camera"></i>
                    {{ $label }}
                    <span class="gallery-tab__count">{{ $images->count() }}</span>
                </button>
            @endforeach
        </div>

        {{-- Tab Panels --}}
        @foreach($groups as $label => $images)
            <div class="gallery-panel {{ $loop->first ? 'active' : '' }}"
                 id="tab-{{ $loop->index }}">

                @if($images->isEmpty())
                    <div class="empty-gallery">
                        <i class="bi bi-images" style="font-size:3rem;color:var(--gray-400);"></i>
                        <p style="margin-top:12px;">No photos yet for this session.</p>
                    </div>
                @else
                    <div class="gallery-grid">
                        @foreach($images as $filename)
                            <div class="gallery-item" onclick="openLightbox('{{ asset('images/gallery/' . $filename) }}')">
                                <img src="{{ asset('images/gallery/' . $filename) }}"
                                     alt="TGT Activity"
                                     loading="lazy">
                                <div class="gallery-item__overlay">
                                    <i class="bi bi-zoom-in"></i>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
        @endforeach

    </div>
</section>

{{-- Lightbox --}}
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <button class="lightbox__close" onclick="closeLightbox()">
        <i class="bi bi-x-lg"></i>
    </button>
    <button class="lightbox__prev" onclick="event.stopPropagation(); changePhoto(-1)">
        <i class="bi bi-chevron-left"></i>
    </button>
    <img src="" alt="Photo" id="lightboxImg" onclick="event.stopPropagation()">
    <button class="lightbox__next" onclick="event.stopPropagation(); changePhoto(1)">
        <i class="bi bi-chevron-right"></i>
    </button>
</div>

{{-- Stay Connected --}}
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
                   class="btn btn-outline-navy btn-sm">
                    <i class="bi bi-instagram"></i> Instagram
                </a>
                <a href="https://tiktok.com/@the.giant.tribe" target="_blank"
                   class="btn btn-outline-navy btn-sm">
                    <i class="bi bi-tiktok"></i> TikTok
                </a>
                <a href="https://t.me/thegainttribe" target="_blank"
                   class="btn btn-outline-navy btn-sm">
                    <i class="bi bi-telegram"></i> Telegram
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Styles --}}
<style>
    /* ---- Tabs ---- */
    .gallery-tabs {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-bottom: 32px;
        justify-content: center;
    }

    .gallery-tab {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        border-radius: var(--radius-pill);
        border: 2px solid var(--gray-200);
        background: var(--white);
        color: var(--text-light);
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        font-family: 'DM Sans', sans-serif;
    }

    .gallery-tab:hover {
        border-color: var(--navy);
        color: var(--navy);
    }

    .gallery-tab.active {
        background: var(--navy);
        border-color: var(--navy);
        color: var(--white);
    }

    .gallery-tab__count {
        background: rgba(255,255,255,0.2);
        color: inherit;
        font-size: 0.75rem;
        font-weight: 700;
        padding: 2px 8px;
        border-radius: var(--radius-pill);
    }

    .gallery-tab:not(.active) .gallery-tab__count {
        background: var(--sky);
        color: var(--navy);
    }

    /* ---- Panels ---- */
    .gallery-panel { display: none; }
    .gallery-panel.active { display: block; }

    /* ---- Gallery Item Overlay ---- */
    .gallery-item {
        position: relative;
        cursor: pointer;
    }

    .gallery-item__overlay {
        position: absolute;
        inset: 0;
        background: rgba(13,45,138,0.4);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: var(--transition);
        color: white;
        font-size: 1.8rem;
    }

    .gallery-item:hover .gallery-item__overlay { opacity: 1; }

    /* ---- Lightbox ---- */
    .lightbox {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.92);
        z-index: 9999;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .lightbox.open { display: flex; }

    .lightbox img {
        max-width: 90vw;
        max-height: 88vh;
        object-fit: contain;
        border-radius: var(--radius);
        box-shadow: 0 20px 60px rgba(0,0,0,0.5);
    }

    .lightbox__close {
        position: fixed;
        top: 20px;
        right: 24px;
        background: rgba(255,255,255,0.1);
        border: none;
        color: white;
        font-size: 1.2rem;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition);
    }

    .lightbox__close:hover { background: rgba(255,255,255,0.25); }

    .lightbox__prev,
    .lightbox__next {
        position: fixed;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255,255,255,0.1);
        border: none;
        color: white;
        font-size: 1.2rem;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition);
    }

    .lightbox__prev { left: 16px; }
    .lightbox__next { right: 16px; }
    .lightbox__prev:hover,
    .lightbox__next:hover { background: rgba(255,255,255,0.25); }
</style>

{{-- Scripts --}}
<script>
    // Tab switching
    document.querySelectorAll('.gallery-tab').forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelectorAll('.gallery-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.gallery-panel').forEach(p => p.classList.remove('active'));
            tab.classList.add('active');
            document.getElementById(tab.dataset.tab).classList.add('active');
            // rebuild photo list for current tab
            buildPhotoList();
        });
    });

    // Lightbox
    let photos = [];
    let currentIndex = 0;

    function buildPhotoList() {
        const activePanel = document.querySelector('.gallery-panel.active');
        photos = [...activePanel.querySelectorAll('.gallery-item img')].map(img => img.src);
    }

    function openLightbox(src) {
        buildPhotoList();
        currentIndex = photos.indexOf(src);
        document.getElementById('lightboxImg').src = src;
        document.getElementById('lightbox').classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        document.getElementById('lightbox').classList.remove('open');
        document.body.style.overflow = '';
    }

    function changePhoto(direction) {
        currentIndex = (currentIndex + direction + photos.length) % photos.length;
        document.getElementById('lightboxImg').src = photos[currentIndex];
    }

    // Keyboard navigation
    document.addEventListener('keydown', e => {
        if (!document.getElementById('lightbox').classList.contains('open')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') changePhoto(1);
        if (e.key === 'ArrowLeft') changePhoto(-1);
    });

    // Build initial photo list
    buildPhotoList();
</script>

@endsection