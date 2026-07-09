@extends('layouts.app')

@section('content')

{{-- ============================================================
     HERO
============================================================ --}}
<section class="hero">
    <div class="hero__bg"></div>
    <div class="hero__dots"></div>

    <div class="container">
        <div class="hero__split">

            {{-- Left: Text Content --}}
            <div class="hero__content">

                <div class="hero__eyebrow">
                    <i class="bi bi-stars"></i> Home of Possibilities
                </div>

                <h1>
                    Raising a<br>
                    <span class="accent">Giant Generation</span>
                </h1>

                <p>
                    We empower young people with the knowledge, mindset, and community
                    they need to achieve greatness and make a lasting impact in the world.
                </p>

                <div class="hero__buttons">
                    <a href="{{ route('join') }}" class="btn btn-primary btn-lg">
                        Join the Community
                    </a>
                    <a href="{{ route('about') }}" class="btn btn-outline btn-lg">
                        Learn More
                    </a>
                </div>

            </div>

            {{-- Right: Photo --}}
            <div class="hero__photo">
                <div class="hero__photo-wrap">
                    <img src="{{ asset('images/gallery/IMG_20260416_004056_654.jpg') }}"
                         alt="TGT outreach — Raising Young People">
                </div>
                <div class="hero__photo-badge">
                    <i class="bi bi-people-fill" style="color:var(--navy);font-size:1rem;"></i>
                    <span>Real Impact. Real People.</span>
                </div>
            </div>

        </div>
    </div>

    <div class="hero__scroll">
        <i class="bi bi-chevron-down" style="font-size:1rem;opacity:0.5;"></i>
        Scroll
    </div>
</section>

{{-- ============================================================
     STATS BAR
============================================================ --}}
<div class="stats-bar">
    <div class="container">
        <div class="stats-bar__inner">

            <div class="stats-bar__item">
                <div class="stats-bar__icon">
                    <i class="bi bi-mortarboard-fill" style="font-size:1.3rem;color:var(--navy);"></i>
                </div>
                <div>
                    <div class="stats-bar__num">4</div>
                    <div class="stats-bar__label">Active Programs</div>
                </div>
            </div>

            <div class="stats-bar__item">
                <div class="stats-bar__icon">
                    <i class="bi bi-globe2" style="font-size:1.3rem;color:var(--navy);"></i>
                </div>
                <div>
                    <div class="stats-bar__num">2025</div>
                    <div class="stats-bar__label">Year Founded</div>
                </div>
            </div>

            <div class="stats-bar__item">
                <div class="stats-bar__icon">
                    <i class="bi bi-infinity" style="font-size:1.3rem;color:var(--navy);"></i>
                </div>
                <div>
                    <div class="stats-bar__num">∞</div>
                    <div class="stats-bar__label">Possibilities</div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ============================================================
     ABOUT PREVIEW
============================================================ --}}
<section class="section section--white">
    <div class="container">
        <div class="about-preview__grid">

            {{-- Visual --}}
            <div class="about-preview__visual fade-up">
                <div class="about-preview__img-wrap">
                    <img src="{{ asset('images/gallery/IMG_20260416_003852_116.jpg') }}"
                         alt="TGT team with award recipients">
                </div>
                <div class="about-preview__badge">
                    <div class="num">100%</div>
                    <div class="label">Commitment to<br>Excellence</div>
                </div>
            </div>

            {{-- Content --}}
            <div class="fade-up delay-2">
                <span class="section-label">Who We Are</span>
                <h2 style="color:var(--navy);margin-bottom:18px;">
                    Bridging the Gap Between Potential & Success
                </h2>
                <p class="lead" style="margin-bottom:20px;">
                    The Giant Tribe Community was born from a desire to equip young people
                    with the mindset, tools, and community they need to rise into
                    world-class individuals who will shape the future.
                </p>
                <p style="margin-bottom:28px;">
                    Founded in 2025 by Colman Jeremiah, we stand on the conviction that every
                    young person carries greatness within them — and with the right environment,
                    they will flourish.
                </p>

                <div class="about-preview__values">
                    <span class="tag tag-navy">Excellence</span>
                    <span class="tag tag-navy">Community</span>
                    <span class="tag tag-navy">Courage</span>
                    <span class="tag tag-navy">Accountability</span>
                    <span class="tag tag-navy">Service</span>
                    <span class="tag tag-navy">Hard Work</span>
                </div>

                <div style="margin-top: 32px;">
                    <a href="{{ route('about') }}" class="btn btn-navy">
                        Our Full Story <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     PROGRAMS PREVIEW
============================================================ --}}
<section class="section section--sky">
    <div class="container">

        <div class="section-header centered">
            <span class="section-label">What We Do</span>
            <h2 style="color:var(--navy);">Our Programs & Initiatives</h2>
            <p>
                Practical, impactful programs designed to build young people
                into thinkers, leaders, and changemakers.
            </p>
        </div>

        <div class="programs-grid">

            <div class="program-card fade-up delay-1">
                <div class="icon-box icon-box-navy">
                    <i class="bi bi-lightbulb-fill" style="color:var(--navy);font-size:1.4rem;"></i>
                </div>
                <h3>Giant Rebuild: S.E.T.</h3>
                <p>
                    A school outreach program designed to sharpen learning skills,
                    prepare students for exams, and develop a thriving mindset
                    capable of solving real-world problems.
                </p>
                <div class="program-card__meta">
                    <span class="tag tag-gold">Secondary School</span>
                    <span class="tag tag-navy">School Outreach</span>
                </div>
            </div>

            <div class="program-card fade-up delay-2">
                <div class="icon-box icon-box-gold">
                    <i class="bi bi-trophy-fill" style="color:var(--gold-dark);font-size:1.4rem;"></i>
                </div>
                <h3>Reward for Excellence</h3>
                <p>
                    Recognizing and celebrating outstanding students in schools
                    and communities, inspiring a culture of excellence and
                    healthy competition among young people.
                </p>
                <div class="program-card__meta">
                    <span class="tag tag-gold">Secondary School</span>
                    <span class="tag tag-navy">School Outreach</span>
                </div>
            </div>

            <div class="program-card fade-up delay-3">
                <div class="icon-box icon-box-navy">
                    <i class="bi bi-laptop-fill" style="color:var(--navy);font-size:1.4rem;"></i>
                </div>
                <h3>Online Teaching Sessions</h3>
                <p>
                    Virtual sessions covering leadership, personal development,
                    and success principles — educating and equipping young
                    people beyond the classroom.
                </p>
                <div class="program-card__meta">
                    <span class="tag tag-gold">Young People</span>
                    <span class="tag tag-navy">Virtual</span>
                </div>
            </div>

            <div class="program-card fade-up delay-4">
                <div class="icon-box icon-box-gold">
                    <i class="bi bi-bullseye" style="color:var(--gold-dark);font-size:1.4rem;"></i>
                </div>
                <h3>Online Workshops</h3>
                <p>
                    Interactive workshops and competitions including Vision Workshop
                    sessions that help students discover their purpose and develop
                    skills that matter.
                </p>
                <div class="program-card__meta">
                    <span class="tag tag-gold">Young People</span>
                    <span class="tag tag-navy">Online</span>
                </div>
            </div>

        </div>

        <div style="text-align:center;margin-top:40px;">
            <a href="{{ route('programs') }}" class="btn btn-navy">
                Explore All Programs <i class="bi bi-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

{{-- ============================================================
     CTA SECTION
============================================================ --}}
<section class="section cta-section">
    <div class="container">
        <div class="cta-section__inner fade-up">

            <span class="section-label" style="justify-content:center;color:rgba(255,179,0,0.9);">
                Take the Next Step
            </span>

            <h2>Ready to Join a Community of Giants?</h2>

            <p>
                Whether you're a student looking to excel, a school seeking to partner,
                or an individual who wants to support the movement — there's a place for you.
            </p>

            <div class="cta-section__buttons">
                <a href="{{ route('join') }}" class="btn btn-primary btn-lg">
                    Join as a Student
                </a>
                <a href="{{ route('join') }}" class="btn btn-outline btn-lg">
                    Partner With Us
                </a>
            </div>

        </div>
    </div>
</section>

{{-- Hero Split Layout Styles --}}
<style>
    .hero__split {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        gap: clamp(40px, 6vw, 80px);
        min-height: 92vh;
        padding: 80px 0 60px;
    }

    .hero__photo {
        position: relative;
        animation: heroFadeIn 1s var(--ease-out) 0.3s both;
    }

    .hero__photo-wrap {
        border-radius: var(--radius-xl);
        overflow: hidden;
        aspect-ratio: 4/5;
        position: relative;
    }

    .hero__photo-wrap::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to bottom,
            transparent 50%,
            rgba(8, 30, 94, 0.5) 100%
        );
        z-index: 1;
        border-radius: var(--radius-xl);
    }

    .hero__photo-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center top;
        display: block;
    }

    .hero__photo-badge {
        position: absolute;
        bottom: -16px;
        left: 24px;
        background: var(--gold);
        color: var(--navy-dark);
        padding: 12px 20px;
        border-radius: var(--radius-pill);
        font-weight: 700;
        font-size: 0.88rem;
        display: flex;
        align-items: center;
        gap: 8px;
        box-shadow: var(--shadow-lg);
        z-index: 2;
        white-space: nowrap;
    }

    @media (max-width: 900px) {
        .hero__split {
            grid-template-columns: 1fr;
            min-height: auto;
            padding: 60px 0 80px;
        }

        .hero__photo {
            order: -1;
        }

        .hero__photo-wrap {
            aspect-ratio: 16/9;
        }
    }
</style>

@endsection