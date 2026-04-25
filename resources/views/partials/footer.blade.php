<footer class="footer">
    <div class="container">

        <div class="footer__grid">

            {{-- Brand Column --}}
            <div>
                <div class="footer__brand-name">
                    <div class="badge">TGT</div>
                    The Giant Tribe Community
                </div>
                <p class="footer__tagline">
                    Raising a Giant Generation with bright minds and excellent spirits who will
                    excel academically, make mega contributions to society, and shape the world.
                </p>

                <div class="footer__social">
                    {{-- Instagram --}}
                    <a href="https://instagram.com/thegianttribe_" target="_blank" rel="noopener" title="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    {{-- TikTok --}}
                    <a href="https://tiktok.com/@the.giant.tribe" target="_blank" rel="noopener" title="TikTok">
                        <i class="bi bi-tiktok"></i>
                    </a>
                    {{-- LinkedIn --}}
                    <a href="https://linkedin.com/company/thegianttribe" target="_blank" rel="noopener" title="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    {{-- Telegram --}}
                    <a href="https://t.me/thegainttribe" target="_blank" rel="noopener" title="Telegram">
                        <i class="bi bi-telegram"></i>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('programs') }}">Programs & Initiatives</a></li>
                    <li><a href="{{ route('impact') }}">Our Impact</a></li>
                    <li><a href="{{ route('join') }}">Join the Community</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4>Contact Us</h4>

                <div class="footer__contact-item">
                    <i class="bi bi-envelope" style="flex-shrink:0;opacity:0.6;font-size:1rem;"></i>
                    <a href="mailto:thegianttribe@gmail.com" style="transition:color 0.25s;color:inherit;">
                        thegianttribe@gmail.com
                    </a>
                </div>

                <div style="margin-top: 20px;">
                    <a href="{{ route('join') }}"
                       style="display:inline-flex;align-items:center;gap:8px;background:var(--gold);color:var(--navy-dark);padding:11px 20px;border-radius:999px;font-weight:700;font-size:0.9rem;transition:all 0.28s;">
                        Join the Community <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="footer__bottom">
            <span>&copy; {{ date('Y') }} The Giant Tribe Community. All rights reserved.</span>
            <span>Home of Possibilities</span>
        </div>

    </div>
</footer>