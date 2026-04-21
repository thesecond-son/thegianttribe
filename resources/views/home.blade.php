@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="hero">
    <div class="container hero-content">
        <div class="hero-text">
            <h1>
                Raising a <span>Giant Generation</span>
            </h1>
            <p>
                We empower young people with the knowledge, mindset, and community
                they need to achieve greatness and make a lasting impact in the world.
            </p>

            <div class="hero-buttons">
                <a href="{{ route('join') }}" class="btn-primary">Join the Community</a>
                <a href="#" class="btn-secondary">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT PREVIEW -->
<section class="about-preview">
    <div class="container">
        <h2>Who We Are</h2>
        <p>
            The Giant Tribe Community was born from a desire to bridge the gap between
            potential and success. We equip young people with the mindset, tools, and
            community they need to rise and become world-class individuals.
        </p>

        <a href="#" class="btn-primary">Learn More</a>
    </div>
</section>


<!-- PROGRAMS SECTION -->
<section class="programs">
    <div class="container">
        <h2>Our Programs</h2>

        <div class="program-grid">

            <div class="program-card">
                <h3>Giant Rebuild: S.E.T.</h3>
                <p>
                    A school outreach program designed to sharpen learning skills,
                    prepare students for exams, and develop a thriving mindset.
                </p>
            </div>

            <div class="program-card">
                <h3>Reward for Excellence</h3>
                <p>
                    Recognizing and celebrating outstanding students to inspire a
                    culture of excellence and healthy competition.
                </p>
            </div>

            <div class="program-card">
                <h3>Online Teaching Sessions</h3>
                <p>
                    Virtual sessions covering leadership, personal development,
                    and success principles for young people.
                </p>
            </div>

            <div class="program-card">
                <h3>Online Workshops</h3>
                <p>
                    Interactive workshops and competitions designed to challenge,
                    inspire, and develop purpose-driven individuals.
                </p>
            </div>

        </div>
    </div>
</section>

@endsection