@extends('layouts.app')

@section('content')

{{-- Page Hero --}}
<section class="a-page-hero">

    <div class="a-page-hero__bg">
    <img src="/images/gallery/IMG_20260416_004921_872.jpg" alt="">
    </div>

    <div class="a-page-hero__dots"></div>
    <div class="container a-page-hero__inner">
        <span class="section-label">Our Story</span>
        <h1>About The Giant<br>Tribe Community</h1>
        <p>
            Born from a desire to bridge the gap between potential and success —
            equipping young people with everything they need to rise.
        </p>
    </div>
</section>

{{-- ============================================================
     STORY SECTION
============================================================ --}}
<section class="section section--white">
    <div class="container">
        <div class="story-grid">

            {{-- Story Content --}}
            <div class="story-grid__content fade-up">
                <span class="section-label">Background</span>
                <h2 style="color:var(--navy);margin-bottom:24px;">
                    How It All Started
                </h2>

                <p>
                    The Giant Tribe Community was born from a desire to bridge the gap between
                    potential and success. Across schools and communities, there are countless
                    students with the raw ability to become great, yet many lack access to
                    mentorship, guidance, and the right resources to truly become better.
                </p>

                <p>
                    TGT was founded to change that reality — to step into that gap and equip
                    young people not just with knowledge, but with the mindset, tools, and
                    community they need to rise.
                </p>

                <p>
                    Founded in 2025 by Colman Jeremiah, The Giant Tribe Community stands on
                    the conviction that every young person carries greatness within them, and
                    that with the right environment, they will flourish.
                </p>

                <div style="margin-top:32px;">
                    <a href="{{ route('join') }}" class="btn btn-navy">
                        Be Part of the Community
                    </a>
                </div>
            </div>

            {{-- Aside / Visual --}}
            <div class="story-grid__aside fade-up delay-2">

                {{-- Founder Quote Card --}}
                <div class="card" style="border-left:4px solid var(--gold);margin-bottom:24px;">
                    <div style="font-size:2rem;color:var(--gold);line-height:1;margin-bottom:12px;">&ldquo;</div>
                    <p style="font-size:1.05rem;line-height:1.75;font-style:italic;color:var(--text-light);margin-bottom:16px;">
                        Every young person carries greatness within them. With the right environment,
                        they will flourish.
                    </p>
                    <div style="display:flex;align-items:center;gap:12px;">
                        <div style="width:40px;height:40px;background:var(--sky);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                            <i class="bi bi-person-fill" style="font-size:1.2rem;color:var(--navy);"></i>
                        </div>
                        <div>
                            <div style="font-weight:700;color:var(--navy);font-size:0.9rem;">Colman Jeremiah</div>
                            <div style="font-size:0.8rem;color:var(--text-muted);">Founder & President, TGT</div>
                        </div>
                    </div>
                </div>

                {{-- Who We Serve --}}
                <div class="card" style="background:var(--sky);box-shadow:none;">
                    <h4 style="color:var(--navy);margin-bottom:16px;">Who We Serve</h4>
                    <ul style="display:flex;flex-direction:column;gap:10px;">
                        @foreach(['Secondary School Students', 'Undergraduates', 'Schools & Institutions', 'Sponsors & Partners'] as $audience)
                        <li style="display:flex;align-items:center;gap:10px;font-size:0.92rem;color:var(--text-light);">
                            <i class="bi bi-chevron-right" style="color:var(--gold);font-size:0.75rem;flex-shrink:0;"></i>
                            {{ $audience }}
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     MISSION & VISION
============================================================ --}}
<section class="section section--sky">
    <div class="container">

        <div class="section-header centered">
            <span class="section-label">Our Foundation</span>
            <h2 style="color:var(--navy);">Mission & Vision</h2>
        </div>

        <div class="mission-vision-grid">

            <div class="mv-card fade-up delay-1">
                <div class="icon-box icon-box-navy" style="margin-bottom:20px;">
                    <i class="bi bi-bullseye" style="color:var(--navy);font-size:1.4rem;"></i>
                </div>
                <h3>Our Mission</h3>
                <p>
                    Raising a Giant Generation with bright minds and excellent spirits who will
                    excel academically, make mega contributions to society, and shape the
                    world at large.
                </p>
            </div>

            <div class="mv-card mv-card--gold fade-up delay-2">
                <div class="icon-box icon-box-gold" style="margin-bottom:20px;">
                    <i class="bi bi-stars" style="color:var(--gold-dark);font-size:1.4rem;"></i>
                </div>
                <h3>Our Vision</h3>
                <p>
                    To raise young people into world-class individuals who embody knowledge,
                    character, and creativity — equipped to solve problems, drive innovation,
                    and make a timeless impact in their fields and the world at large.
                </p>
            </div>

        </div>

    </div>
</section>

{{-- ============================================================
     CORE VALUES
============================================================ --}}
<section class="section section--white">
    <div class="container">

        <div class="section-header centered">
            <span class="section-label">What Drives Us</span>
            <h2 style="color:var(--navy);">Our Core Values</h2>
            <p>The principles that guide everything we do.</p>
        </div>

        <div class="values-grid">

            <div class="value-chip fade-up" style="flex-direction:column;align-items:flex-start;gap:10px;padding:22px;">
                <div style="display:flex;align-items:center;gap:10px;">
                    <i class="bi bi-patch-check-fill" style="font-size:1.3rem;color:var(--gold);"></i>
                    <span style="font-weight:700;font-size:1rem;color:var(--navy);">Excellence</span>
                </div>
                <p style="font-size:0.85rem;color:var(--text-muted);line-height:1.5;margin:0;">We pursue the highest standard in all things.</p>
            </div>

            <div class="value-chip fade-up delay-1" style="flex-direction:column;align-items:flex-start;gap:10px;padding:22px;">
                <div style="display:flex;align-items:center;gap:10px;">
                    <i class="bi bi-people-fill" style="font-size:1.3rem;color:var(--gold);"></i>
                    <span style="font-weight:700;font-size:1rem;color:var(--navy);">Community</span>
                </div>
                <p style="font-size:0.85rem;color:var(--text-muted);line-height:1.5;margin:0;">We grow stronger together, not apart.</p>
            </div>

            <div class="value-chip fade-up delay-2" style="flex-direction:column;align-items:flex-start;gap:10px;padding:22px;">
                <div style="display:flex;align-items:center;gap:10px;">
                    <i class="bi bi-shield-fill-check" style="font-size:1.3rem;color:var(--gold);"></i>
                    <span style="font-weight:700;font-size:1rem;color:var(--navy);">Courage</span>
                </div>
                <p style="font-size:0.85rem;color:var(--text-muted);line-height:1.5;margin:0;">We dare to dream big and act boldly.</p>
            </div>

            <div class="value-chip fade-up delay-1" style="flex-direction:column;align-items:flex-start;gap:10px;padding:22px;">
                <div style="display:flex;align-items:center;gap:10px;">
                    <i class="bi bi-clipboard2-check-fill" style="font-size:1.3rem;color:var(--gold);"></i>
                    <span style="font-weight:700;font-size:1rem;color:var(--navy);">Accountability</span>
                </div>
                <p style="font-size:0.85rem;color:var(--text-muted);line-height:1.5;margin:0;">We own our actions and keep our word.</p>
            </div>

            <div class="value-chip fade-up delay-2" style="flex-direction:column;align-items:flex-start;gap:10px;padding:22px;">
                <div style="display:flex;align-items:center;gap:10px;">
                    <i class="bi bi-heart-fill" style="font-size:1.3rem;color:var(--gold);"></i>
                    <span style="font-weight:700;font-size:1rem;color:var(--navy);">Service</span>
                </div>
                <p style="font-size:0.85rem;color:var(--text-muted);line-height:1.5;margin:0;">We give back and contribute to others.</p>
            </div>

            <div class="value-chip fade-up delay-3" style="flex-direction:column;align-items:flex-start;gap:10px;padding:22px;">
                <div style="display:flex;align-items:center;gap:10px;">
                    <i class="bi bi-lightning-charge-fill" style="font-size:1.3rem;color:var(--gold);"></i>
                    <span style="font-weight:700;font-size:1rem;color:var(--navy);">Hard Work</span>
                </div>
                <p style="font-size:0.85rem;color:var(--text-muted);line-height:1.5;margin:0;">We know that greatness is earned.</p>
            </div>

        </div>

    </div>
</section>

{{-- ============================================================
     LEADERSHIP
============================================================ --}}
<section class="section section--sky">
    <div class="container">

        <div class="section-header centered">
            <span class="section-label">The Team</span>
            <h2 style="color:var(--navy);">Our Leadership</h2>
        </div>

        <div class="leadership-grid">

            <div class="leader-card fade-up delay-1">
                <div class="leader-card__img">
                    <i class="bi bi-person-circle" style="font-size:3.5rem;color:var(--navy);opacity:0.4;"></i>
                </div>
                <div class="leader-card__info">
                    <h4>Colman Jeremiah</h4>
                    <p>Founder & President</p>
                </div>
            </div>

            <div class="leader-card fade-up delay-2">
                <div class="leader-card__img">
                    <i class="bi bi-person-circle" style="font-size:3.5rem;color:var(--navy);opacity:0.4;"></i>
                </div>
                <div class="leader-card__info">
                    <h4>Odediran Dasola</h4>
                    <p>Vice President</p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- ============================================================
     OBJECTIVES
============================================================ --}}
<section class="section section--white">
    <div class="container">

        <div style="display:grid;grid-template-columns:1fr 1.4fr;gap:64px;align-items:start;">

            <div class="fade-up" style="position:sticky;top:96px;">
                <span class="section-label">What We Stand For</span>
                <h2 style="color:var(--navy);margin-bottom:16px;">Goals & Objectives</h2>
                <p style="margin-bottom:28px;">
                    Everything we do is guided by a clear set of objectives rooted in
                    academic excellence, character development, and timeless impact.
                </p>
                <a href="{{ route('programs') }}" class="btn btn-outline-navy">
                    See Our Programs
                </a>
            </div>

            <ul class="objectives-list fade-up delay-1">
                <li>Raise young people into world-class individuals who embody knowledge, character, and creativity.</li>
                <li>Promote academic excellence through mentorship, outreach programs, and recognition initiatives.</li>
                <li>Build an accountability community that fosters growth, discipline, and continuous advancement.</li>
                <li>Cultivate self-awareness and empower young people in discovering their unique purpose and potential.</li>
                <li>Organize seminars, conferences, workshops, and programs that inspire purposeful leadership.</li>
                <li>Reward outstanding students with scholarships, educational materials, and financial support.</li>
                <li>Promote moral and ethical values rooted in integrity, discipline, accountability, and service.</li>
                <li>Create systems that improve education quality in Nigeria and contribute to global youth development.</li>
                <li>Foster a community that encourages spiritual growth, character development, and intellectual advancement.</li>
            </ul>

        </div>

    </div>
</section>

{{-- CTA --}}
<section class="section cta-section">
    <div class="container">
        <div class="cta-section__inner fade-up">
            <span class="section-label" style="justify-content:center;color:rgba(255,179,0,0.9);">Get Involved</span>
            <h2>Be Part of Something Larger Than Yourself</h2>
            <p>Join a generation of young people committed to excellence and impact.</p>
            <div class="cta-section__buttons">
                <a href="{{ route('join') }}" class="btn btn-primary btn-lg">Join the Community</a>
                <a href="{{ route('programs') }}" class="btn btn-outline btn-lg">Explore Programs</a>
            </div>
        </div>
    </div>
</section>

<style>
    .a-page-hero {
            background: var(--navy);
            padding: clamp(56px, 7vw, 96px) 0;
            position: relative;
            overflow: hidden;
        }

     /* Background image layer */
     .a-page-hero__bg{
        position:absolute;
        inset:0;
        overflow:hidden;
        }

        .a-page-hero__bg img{
            width:100%;
            height:100%;
            object-fit: cover;
            object-position: center 45%;
            transform: scale(1.05); /* now this works properly */
        }

     .a-page-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(13,45,138,0.82);
            pointer-events: none;
            z-index: 1;
        }

        .a-page-hero__dots {
            position: absolute;
            inset: 0;
            z-index: 2;
            background-image: radial-gradient(circle, rgba(255,255,255,0.07) 1px, transparent 1px);
            background-size: 32px 32px;
            pointer-events: none;
        }

        .a-page-hero__inner {
            position: relative;
            z-index: 3;
        }

        .a-page-hero .section-label { color: rgba(255,179,0,0.85); }
        .a-page-hero .section-label::before { background: rgba(255,179,0,0.85); }

        .a-page-hero h1 {
            color: var(--white);
            margin-bottom: 18px;
        }

        .a-page-hero p {
            color: rgba(255,255,255,0.7);
            max-width: 580px;
            font-size: 1.05rem;
        }
</style>
@endsection