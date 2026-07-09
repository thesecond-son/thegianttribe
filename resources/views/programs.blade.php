@extends('layouts.app')

@section('content')

{{-- Page Hero --}}
<section class="p-page-hero">

    <div class="p-page-hero__bg"></div>

    <div class="p-page-hero__dots"></div>
    <div class="container p-page-hero__inner">
        <span class="section-label">What We Do</span>
        <h1>Programs &<br>Initiatives</h1>
        <p>
            Practical, impactful programs built to raise young people into
            world-class thinkers, leaders, and changemakers.
        </p>
    </div>
</section>

{{-- ============================================================
     PROGRAMS LIST
============================================================ --}}
<section class="section section--sky">
  <div class="container">

    <div class="programs-grid">

      {{-- Program 1 --}}
      <div class="program-card fade-up">
        <div class="program-card__image">
          <img src="{{ asset('images/gallery/IMG_20260415_022637_614.jpg') }}" alt="School Outreach">
        </div>

        <div class="program-card__content">
          <span class="tag tag-gold">School Outreach</span>
          <h3>Giant Rebuild: S.E.T.</h3>

          <p>
            A school outreach program designed to help students discover their unique learning style,
            become exam ready, and develop a thriving mindset.
          </p>

          <div class="program-card__meta">
            <span class="detail-pill"><i class="bi bi-person-fill"></i> Students</span>
            <span class="detail-pill"><i class="bi bi-house-fill"></i> In-School</span>
          </div>
        </div>
      </div>

      {{-- Program 2 --}}
      <div class="program-card fade-up delay-1">
        <div class="program-card__image">
          <img src="{{ asset('images/gallery/IMG_20260415_022729_703.jpg') }}" alt="Recognition">
        </div>

        <div class="program-card__content">
          <span class="tag tag-gold">Recognition Initiative</span>
          <h3>Reward for Excellence</h3>

          <p>
            Recognizing and celebrating outstanding students to inspire excellence
            and healthy competition.
          </p>

          <div class="program-card__meta">
            <span class="detail-pill"><i class="bi bi-person-fill"></i> Students</span>
            <span class="detail-pill"><i class="bi bi-award-fill"></i> Awards</span>
          </div>
        </div>
      </div>

      {{-- Program 3 --}}
      <div class="program-card fade-up delay-2">
        <div class="program-card__image">
          <img src="{{ asset('images/gallery/IMG_20260416_003430_501.jpg') }}" alt="Online Sessions">
        </div>

        <div class="program-card__content">
          <span class="tag tag-gold">Virtual Program</span>
          <h3>Online Teaching</h3>

          <p>
            Regular online sessions covering leadership, personal development,
            and success principles.
          </p>

          <div class="program-card__meta">
            <span class="detail-pill"><i class="bi bi-display"></i> Online</span>
            <span class="detail-pill"><i class="bi bi-people-fill"></i> Youth</span>
          </div>
        </div>
      </div>

      {{-- Program 4 --}}
      <div class="program-card fade-up delay-3">
        <div class="program-card__image">
          <img src="{{ asset('images/gallery/IMG_20260416_011625_672.jpg') }}" alt="Workshops">
        </div>

        <div class="program-card__content">
          <span class="tag tag-gold">Workshop</span>
          <h3>Online Workshops</h3>

          <p>
            Interactive sessions like Vision Workshops and competitions
            that sharpen thinking and purpose.
          </p>

          <div class="program-card__meta">
            <span class="detail-pill"><i class="bi bi-lightbulb-fill"></i> Vision</span>
            <span class="detail-pill"><i class="bi bi-patch-check-fill"></i> Competitions</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

{{-- CTA --}}
<section class="section cta-section">
    <div class="container">
        <div class="cta-section__inner fade-up">
            <span class="section-label" style="justify-content:center;color:rgba(255,179,0,0.9);">Get Involved</span>
            <h2>Ready to Be Part of These Programs?</h2>
            <p>Join the community and gain access to everything we offer.</p>
            <div class="cta-section__buttons">
                <a href="{{ route('join') }}" class="btn btn-primary btn-lg">Join as a Student</a>
                <a href="{{ route('join') }}" class="btn btn-outline btn-lg">Partner With Us</a>
            </div>
        </div>
    </div>
</section>

<style>
        .p-page-hero {
            background: var(--navy);
            padding: clamp(56px, 7vw, 96px) 0;
            position: relative;
            overflow: hidden;
        }

        /* Background image layer */
        .p-page-hero__bg{
        position:absolute;
        inset:0;
        background:url('/images/gallery/IMG_20260407_001947_721.jpg') center 70% /cover no-repeat;
        z-index:0;
        transform: scale(1.05); /* subtle zoom = premium feel */
        }

        .p-page-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(13,45,138,0.82);
            pointer-events: none;
            z-index: 1;
        }

        .p-page-hero__dots {
            position: absolute;
            inset: 0;
            z-index: 2;
            background-image: radial-gradient(circle, rgba(255,255,255,0.07) 1px, transparent 1px);
            background-size: 32px 32px;
            pointer-events: none;
        }

        .p-page-hero__inner {
            position: relative;
            z-index: 3;
        }

        .p-page-hero .section-label { color: rgba(255,179,0,0.85); }
        .p-page-hero .section-label::before { background: rgba(255,179,0,0.85); }

        .p-page-hero h1 {
            color: var(--white);
            margin-bottom: 18px;
        }

        .p-page-hero p {
            color: rgba(255,255,255,0.7);
            max-width: 580px;
            font-size: 1.05rem;
        }
</style>

@endsection