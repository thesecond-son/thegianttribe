<header class="navbar">
    <div class="container">
        <div class="navbar__inner">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="navbar__logo">
                <div class="navbar__logo-badge">TGT</div>
                <span>The Giant Tribe</span>
            </a>

            {{-- Desktop nav links --}}
            <nav class="navbar__links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('programs') }}">Programs</a>
                <a href="{{ route('impact') }}">Impact</a>
                <a href="{{ route('join') }}" class="navbar__cta">Join the Community</a>
            </nav>

            {{-- Hamburger --}}
            <button class="navbar__hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>

        {{-- Mobile nav --}}
        <nav class="navbar__mobile" id="mobileMenu">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('programs') }}">Programs</a>
            <a href="{{ route('impact') }}">Impact</a>
            <a href="{{ route('join') }}" class="navbar__cta">Join the Community</a>
        </nav>

    </div>
</header>
