@extends('layouts.app')

@section('content')

{{-- Page Hero --}}
<section class="page-hero">
    <div class="page-hero__dots"></div>
    <div class="container page-hero__inner">
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

        {{-- Program 1 --}}
        <div class="program-block fade-up">
            <div class="program-block__header">
                <div class="icon-box icon-box-navy" style="width:60px;height:60px;font-size:1.7rem;">🧠</div>
                <div>
                    <span class="tag tag-gold" style="margin-bottom:8px;display:inline-flex;">School Outreach</span>
                    <h2>Giant Rebuild: S.E.T.</h2>
                </div>
            </div>

            <div style="background:var(--sky);border-radius:var(--radius-sm);padding:14px 18px;margin-bottom:20px;display:inline-flex;flex-wrap:wrap;gap:12px;">
                <span style="font-weight:700;color:var(--navy);font-size:0.88rem;">S — Sharpening Your Learning Skills</span>
                <span style="color:var(--text-muted);">|</span>
                <span style="font-weight:700;color:var(--navy);font-size:0.88rem;">E — Exam Ready</span>
                <span style="color:var(--text-muted);">|</span>
                <span style="font-weight:700;color:var(--navy);font-size:0.88rem;">T — Thriving Mind</span>
            </div>

            <p class="program-block__body">
                A school outreach program designed to help students discover their unique learning style
                and sharpen it. Students are equipped to become fully exam ready while also developing
                a thriving mindset — building young thinkers who can face real problems and bring
                real solutions.
            </p>

            <div class="program-block__details">
                <span class="detail-pill">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                    Secondary School Students
                </span>
                <span class="detail-pill">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                    School Outreach / In-Class Sessions
                </span>
            </div>
        </div>

        {{-- Program 2 --}}
        <div class="program-block fade-up delay-1">
            <div class="program-block__header">
                <div class="icon-box icon-box-gold" style="width:60px;height:60px;font-size:1.7rem;">🏆</div>
                <div>
                    <span class="tag tag-gold" style="margin-bottom:8px;display:inline-flex;">Recognition Initiative</span>
                    <h2>Reward for Excellence Outreach</h2>
                </div>
            </div>

            <p class="program-block__body">
                An outreach initiative dedicated to recognizing and celebrating excellence among students.
                TGT goes directly into schools and communities to identify outstanding individuals and
                reward the best — inspiring a culture of excellence and healthy competition among
                young people.
            </p>

            <div class="program-block__details">
                <span class="detail-pill">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                    Secondary School Students
                </span>
                <span class="detail-pill">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                    School Outreach
                </span>
            </div>
        </div>

        {{-- Program 3 --}}
        <div class="program-block fade-up delay-2">
            <div class="program-block__header">
                <div class="icon-box icon-box-navy" style="width:60px;height:60px;font-size:1.7rem;">💻</div>
                <div>
                    <span class="tag tag-gold" style="margin-bottom:8px;display:inline-flex;">Virtual Program</span>
                    <h2>Online Teaching Sessions</h2>
                </div>
            </div>

            <p class="program-block__body">
                Regular online sessions covering a wide range of subjects including leadership,
                personal development, and success principles. Designed to educate, inspire, and
                equip young people beyond the four walls of a classroom — wherever they are.
            </p>

            <div class="program-block__details">
                <span class="detail-pill">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                    Students / Young People
                </span>
                <span class="detail-pill">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                    Online / Virtual Sessions
                </span>
            </div>
        </div>

        {{-- Program 4 --}}
        <div class="program-block fade-up delay-3">
            <div class="program-block__header">
                <div class="icon-box icon-box-gold" style="width:60px;height:60px;font-size:1.7rem;">🎯</div>
                <div>
                    <span class="tag tag-gold" style="margin-bottom:8px;display:inline-flex;">Interactive Workshop</span>
                    <h2>Online Workshops</h2>
                </div>
            </div>

            <p class="program-block__body">
                Interactive online workshops that engage and challenge young people. Current workshop
                formats include the <strong>Vision Workshop</strong> — helping students discover and define
                their purpose — and <strong>Competitions</strong> that sharpen skills and reward excellence
                among participants.
            </p>

            <div class="program-block__details">
                <span class="detail-pill">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                    Students / Young People
                </span>
                <span class="detail-pill">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    Online Workshops & Competitions
                </span>
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

@endsection
