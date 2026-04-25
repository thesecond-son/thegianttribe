<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Giant Tribe Community</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>

        /* ============================================================
           CSS DESIGN SYSTEM — THE GIANT TRIBE COMMUNITY
        ============================================================ */

        :root {
            --navy:        #0D2D8A;
            --navy-dark:   #081e5e;
            --navy-mid:    #163694;
            --blue:        #2255CC;
            --blue-light:  #3a6ae8;
            --sky:         #E8EEFB;
            --sky-dark:    #d4ddf7;
            --gold:        #FFB300;
            --gold-dark:   #d99800;
            --gold-pale:   #fff4d6;
            --white:       #ffffff;
            --off-white:   #F8FAFF;
            --gray-50:     #f7f9fc;
            --gray-100:    #eef1f8;
            --gray-200:    #dde3f0;
            --gray-400:    #8e9ab5;
            --gray-500:    #64748b;
            --gray-700:    #374151;
            --text:        #111827;
            --text-light:  #4b5568;
            --text-muted:  #7a87a0;

            --shadow-xs: 0 1px 4px rgba(13,45,138,0.06);
            --shadow-sm: 0 2px 10px rgba(13,45,138,0.08);
            --shadow:    0 4px 20px rgba(13,45,138,0.12);
            --shadow-lg: 0 8px 40px rgba(13,45,138,0.16);
            --shadow-xl: 0 16px 64px rgba(13,45,138,0.22);

            --radius-sm:  8px;
            --radius:     14px;
            --radius-lg:  22px;
            --radius-xl:  32px;
            --radius-pill: 999px;

            --ease: cubic-bezier(0.4, 0, 0.2, 1);
            --ease-out: cubic-bezier(0, 0, 0.2, 1);
            --transition: all 0.28s var(--ease);
        }

        /* ---- Reset & Base ---- */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--off-white);
            color: var(--text);
            line-height: 1.65;
            font-size: 16px;
            -webkit-font-smoothing: antialiased;
        }

        img { max-width: 100%; display: block; }
        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }
        button { font-family: inherit; cursor: pointer; }
        input, textarea, select { font-family: inherit; }

        /* ---- Typography ---- */
        h1, h2, h3, h4, h5 {
            font-family: 'Bricolage Grotesque', sans-serif;
            line-height: 1.2;
            color: var(--text);
            font-weight: 700;
        }

        h1 { font-size: clamp(2.2rem, 5vw, 3.8rem); font-weight: 800; }
        h2 { font-size: clamp(1.7rem, 3.5vw, 2.6rem); }
        h3 { font-size: clamp(1.2rem, 2.5vw, 1.5rem); }
        h4 { font-size: 1.1rem; }

        p { color: var(--text-light); }

        .lead {
            font-size: clamp(1rem, 1.8vw, 1.2rem);
            line-height: 1.75;
            color: var(--text-light);
        }

        /* ---- Layout ---- */
        .container {
            width: min(90%, 1160px);
            margin-inline: auto;
        }

        .section {
            padding: clamp(64px, 8vw, 112px) 0;
        }

        .section--white  { background: var(--white); }
        .section--sky    { background: var(--sky); }
        .section--navy   { background: var(--navy); }
        .section--dark   { background: var(--navy-dark); }

        .section-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 14px;
        }
        .section-label::before {
            content: '';
            display: inline-block;
            width: 28px;
            height: 2px;
            background: var(--gold);
            border-radius: 2px;
        }

        .section-header {
            margin-bottom: clamp(40px, 5vw, 64px);
        }
        .section-header.centered { text-align: center; }
        .section-header .section-label { margin-bottom: 12px; }
        .section-header h2 { margin-bottom: 16px; }
        .section-header p  { max-width: 600px; }
        .section-header.centered p { margin-inline: auto; }

        /* ---- Buttons ---- */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 13px 28px;
            border-radius: var(--radius-pill);
            font-weight: 600;
            font-size: 0.95rem;
            transition: var(--transition);
            border: none;
            white-space: nowrap;
        }

        .btn-primary {
            background: var(--gold);
            color: var(--navy-dark);
        }
        .btn-primary:hover {
            background: var(--gold-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 24px rgba(255,179,0,0.4);
        }

        .btn-navy {
            background: var(--navy);
            color: var(--white);
        }
        .btn-navy:hover {
            background: var(--navy-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .btn-outline {
            background: transparent;
            color: var(--white);
            border: 2px solid rgba(255,255,255,0.5);
        }
        .btn-outline:hover {
            background: rgba(255,255,255,0.1);
            border-color: var(--white);
        }

        .btn-outline-navy {
            background: transparent;
            color: var(--navy);
            border: 2px solid var(--navy);
        }
        .btn-outline-navy:hover {
            background: var(--navy);
            color: var(--white);
            transform: translateY(-2px);
        }

        .btn-sm { padding: 9px 20px; font-size: 0.875rem; }
        .btn-lg { padding: 16px 36px; font-size: 1rem; }

        /* ---- Cards ---- */
        .card {
            background: var(--white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            padding: 32px;
            transition: var(--transition);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        /* ---- Tag / Badge ---- */
        .tag {
            display: inline-flex;
            align-items: center;
            padding: 4px 14px;
            border-radius: var(--radius-pill);
            font-size: 0.8rem;
            font-weight: 600;
        }
        .tag-gold { background: var(--gold-pale); color: var(--gold-dark); }
        .tag-navy { background: var(--sky); color: var(--navy); }
        .tag-blue { background: rgba(34,85,204,0.1); color: var(--blue); }

        /* ---- Icon Box ---- */
        .icon-box {
            width: 52px;
            height: 52px;
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
            flex-shrink: 0;
        }
        .icon-box-gold { background: var(--gold-pale); }
        .icon-box-navy { background: var(--sky); }

        /* ---- Forms ---- */
        .form-group { margin-bottom: 18px; }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--gray-700);
            margin-bottom: 7px;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius-sm);
            font-size: 0.95rem;
            color: var(--text);
            background: var(--white);
            transition: var(--transition);
            outline: none;
        }

        .form-input:focus {
            border-color: var(--blue);
            box-shadow: 0 0 0 3px rgba(34,85,204,0.12);
        }

        .form-input::placeholder { color: var(--text-muted); }

        .form-error {
            display: block;
            font-size: 0.8rem;
            color: #e53e3e;
            margin-top: 5px;
        }

        /* ---- Alerts ---- */
        .alert {
            padding: 14px 18px;
            border-radius: var(--radius-sm);
            font-weight: 500;
            margin-bottom: 24px;
            font-size: 0.9rem;
        }
        .alert-success { background: #d1fae5; color: #065f46; border: 1px solid #6ee7b7; }
        .alert-error   { background: #fee2e2; color: #991b1b; border: 1px solid #fca5a5; }

        /* ============================================================
           NAVBAR
        ============================================================ */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(13, 45, 138, 0.98);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.08);
            padding: 0;
        }

        .navbar__inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 68px;
        }

        .navbar__logo {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--white);
            font-family: 'Bricolage Grotesque', sans-serif;
            font-weight: 800;
            font-size: 1.1rem;
            letter-spacing: -0.02em;
        }

        .navbar__logo-badge {
            width: 36px;
            height: 36px;
            background: var(--gold);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: 900;
            color: var(--navy-dark);
            letter-spacing: 0;
            font-family: 'Bricolage Grotesque', sans-serif;
        }

        .navbar__links {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .navbar__links a {
            color: rgba(255,255,255,0.78);
            font-size: 0.9rem;
            font-weight: 500;
            padding: 7px 14px;
            border-radius: 8px;
            transition: var(--transition);
            position: relative;
        }

        .navbar__links a:hover,
        .navbar__links a.active {
            color: var(--white);
            background: rgba(255,255,255,0.1);
        }

        .navbar__cta {
            background: var(--gold) !important;
            color: var(--navy-dark) !important;
            font-weight: 700 !important;
            padding: 8px 18px !important;
        }
        .navbar__cta:hover {
            background: var(--gold-dark) !important;
        }

        .navbar__hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            background: none;
            border: none;
            padding: 6px;
            cursor: pointer;
        }

        .navbar__hamburger span {
            display: block;
            width: 24px;
            height: 2px;
            background: var(--white);
            border-radius: 2px;
            transition: var(--transition);
        }

        .navbar__mobile {
            display: none;
            flex-direction: column;
            background: var(--navy-dark);
            border-top: 1px solid rgba(255,255,255,0.08);
            padding: 16px 0 24px;
        }

        .navbar__mobile a {
            color: rgba(255,255,255,0.8);
            font-weight: 500;
            padding: 12px 24px;
            display: block;
            transition: var(--transition);
        }

        .navbar__mobile a:hover { color: var(--white); background: rgba(255,255,255,0.07); }

        .navbar__mobile .navbar__cta {
            margin: 12px 24px 0;
            text-align: center;
            border-radius: var(--radius-pill);
        }

        /* ============================================================
           FOOTER
        ============================================================ */

        .footer {
            background: var(--navy-dark);
            color: rgba(255,255,255,0.7);
            padding-top: 64px;
        }

        .footer__grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr 1fr;
            gap: 48px;
            padding-bottom: 48px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .footer__brand-name {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-weight: 800;
            font-size: 1.15rem;
            color: var(--white);
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 16px;
        }

        .footer__brand-name .badge {
            width: 32px;
            height: 32px;
            background: var(--gold);
            border-radius: 7px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.65rem;
            font-weight: 900;
            color: var(--navy-dark);
        }

        .footer__tagline {
            font-size: 0.92rem;
            line-height: 1.7;
            margin-bottom: 24px;
            color: rgba(255,255,255,0.55);
        }

        .footer__social {
            display: flex;
            gap: 10px;
        }

        .footer__social a {
            width: 36px;
            height: 36px;
            background: rgba(255,255,255,0.08);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            color: rgba(255,255,255,0.6);
            transition: var(--transition);
        }

        .footer__social a:hover {
            background: var(--gold);
            color: var(--navy-dark);
        }

        .footer h4 {
            color: var(--white);
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .footer ul li { margin-bottom: 10px; }

        .footer ul li a {
            color: rgba(255,255,255,0.55);
            font-size: 0.92rem;
            transition: var(--transition);
        }

        .footer ul li a:hover { color: var(--gold); }

        .footer__contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            color: rgba(255,255,255,0.55);
            margin-bottom: 10px;
        }

        .footer__bottom {
            padding: 20px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.85rem;
            color: rgba(255,255,255,0.35);
            flex-wrap: wrap;
            gap: 8px;
        }

        /* ============================================================
           PAGE HERO (reusable for inner pages)
        ============================================================ */

        .page-hero {
            background: var(--navy);
            padding: clamp(56px, 7vw, 96px) 0;
            position: relative;
            overflow: hidden;
        }

        .page-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 70% 80% at 80% 50%, rgba(34,85,204,0.35) 0%, transparent 70%),
                        radial-gradient(ellipse 50% 60% at -10% 50%, rgba(255,179,0,0.08) 0%, transparent 60%);
            pointer-events: none;
        }

        .page-hero__dots {
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle, rgba(255,255,255,0.07) 1px, transparent 1px);
            background-size: 32px 32px;
            pointer-events: none;
        }

        .page-hero__inner {
            position: relative;
            z-index: 1;
        }

        .page-hero .section-label { color: rgba(255,179,0,0.85); }
        .page-hero .section-label::before { background: rgba(255,179,0,0.85); }

        .page-hero h1 {
            color: var(--white);
            margin-bottom: 18px;
        }

        .page-hero p {
            color: rgba(255,255,255,0.7);
            max-width: 580px;
            font-size: 1.05rem;
        }

        /* ============================================================
           HOME — HERO SECTION
        ============================================================ */

        .hero {
            min-height: 92vh;
            background: var(--navy);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero__bg {
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 80% 90% at 90% 50%, rgba(34,85,204,0.4) 0%, transparent 65%),
                radial-gradient(ellipse 60% 60% at -5% 70%, rgba(255,179,0,0.1) 0%, transparent 55%),
                radial-gradient(ellipse 40% 40% at 50% -10%, rgba(255,255,255,0.03) 0%, transparent 50%);
            pointer-events: none;
        }

        .hero__dots {
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle, rgba(255,255,255,0.06) 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none;
        }

        .hero__accent-ring {
            position: absolute;
            right: -80px;
            top: 50%;
            transform: translateY(-50%);
            width: 600px;
            height: 600px;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,0.05);
            pointer-events: none;
        }

        .hero__accent-ring::before {
            content: '';
            position: absolute;
            inset: 40px;
            border-radius: 50%;
            border: 1px solid rgba(255,179,0,0.08);
        }

        .hero__content {
            position: relative;
            z-index: 2;
            max-width: 660px;
            animation: heroFadeIn 0.9s var(--ease-out) both;
        }

        @keyframes heroFadeIn {
            from { opacity: 0; transform: translateY(28px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .hero__eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,179,0,0.12);
            border: 1px solid rgba(255,179,0,0.25);
            color: var(--gold);
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 6px 14px;
            border-radius: var(--radius-pill);
            margin-bottom: 24px;
        }

        .hero h1 {
            color: var(--white);
            font-size: clamp(2.6rem, 6vw, 4.4rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 24px;
            letter-spacing: -0.025em;
        }

        .hero h1 .accent {
            color: var(--gold);
            display: inline-block;
        }

        .hero p {
            color: rgba(255,255,255,0.7);
            font-size: clamp(1rem, 1.8vw, 1.18rem);
            line-height: 1.75;
            margin-bottom: 36px;
            max-width: 520px;
        }

        .hero__buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .hero__scroll {
            position: absolute;
            bottom: 32px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            color: rgba(255,255,255,0.35);
            font-size: 0.7rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            z-index: 2;
            animation: scrollBounce 2s ease-in-out infinite;
        }

        .hero__scroll svg { opacity: 0.5; }

        @keyframes scrollBounce {
            0%, 100% { transform: translateX(-50%) translateY(0); }
            50% { transform: translateX(-50%) translateY(6px); }
        }

        /* ---- Stats Bar ---- */
        .stats-bar {
            background: var(--white);
            border-bottom: 1px solid var(--gray-100);
            padding: 0;
        }

        .stats-bar__inner {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        .stats-bar__item {
            padding: 28px 24px;
            display: flex;
            align-items: center;
            gap: 16px;
            border-right: 1px solid var(--gray-100);
        }

        .stats-bar__item:last-child { border-right: none; }

        .stats-bar__icon {
            width: 44px;
            height: 44px;
            background: var(--sky);
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .stats-bar__num {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--navy);
            line-height: 1;
        }

        .stats-bar__label {
            font-size: 0.82rem;
            color: var(--text-muted);
            font-weight: 500;
            margin-top: 3px;
        }

        /* ---- About Preview ---- */
        .about-preview__grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: clamp(40px, 6vw, 80px);
            align-items: center;
        }

        .about-preview__visual {
            position: relative;
        }

        .about-preview__img-wrap {
            background: var(--sky);
            border-radius: var(--radius-xl);
            overflow: hidden;
            aspect-ratio: 4/3;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-preview__img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .about-preview__badge {
            position: absolute;
            bottom: -20px;
            right: -16px;
            background: var(--gold);
            color: var(--navy-dark);
            padding: 18px 22px;
            border-radius: var(--radius);
            font-family: 'Bricolage Grotesque', sans-serif;
            font-weight: 800;
            text-align: center;
            box-shadow: var(--shadow-lg);
        }

        .about-preview__badge .num {
            font-size: 1.8rem;
            line-height: 1;
        }

        .about-preview__badge .label {
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            opacity: 0.8;
        }

        .about-preview__values {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 28px;
        }

        /* ---- Programs Grid ---- */
        .programs-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .program-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            padding: 32px;
            border: 1.5px solid var(--gray-100);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .program-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--navy);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.35s var(--ease);
        }

        .program-card:hover {
            border-color: transparent;
            box-shadow: var(--shadow-lg);
            transform: translateY(-4px);
        }

        .program-card:hover::before { transform: scaleX(1); }

        .program-card h3 {
            color: var(--navy);
            margin-bottom: 10px;
            font-size: 1.15rem;
        }

        .program-card p {
            font-size: 0.92rem;
            line-height: 1.7;
        }

        .program-card__meta {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: 18px;
        }

        /* ---- CTA Section ---- */
        .cta-section {
            background: var(--navy);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 60% 80% at 50% 120%, rgba(34,85,204,0.5) 0%, transparent 60%),
                radial-gradient(ellipse 40% 40% at 0% 0%, rgba(255,179,0,0.06) 0%, transparent 50%);
            pointer-events: none;
        }

        .cta-section__inner {
            position: relative;
            z-index: 1;
            max-width: 600px;
            margin-inline: auto;
        }

        .cta-section h2 { color: var(--white); margin-bottom: 18px; }

        .cta-section p {
            color: rgba(255,255,255,0.65);
            margin-bottom: 36px;
            font-size: 1.05rem;
        }

        .cta-section__buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 14px;
        }

        /* ============================================================
           ABOUT PAGE
        ============================================================ */

        .story-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: clamp(40px, 6vw, 80px);
            align-items: start;
        }

        .story-grid__content p {
            margin-bottom: 18px;
            font-size: 1rem;
            line-height: 1.8;
        }

        .story-grid__content p:last-child { margin-bottom: 0; }

        .story-grid__aside {
            position: sticky;
            top: 96px;
        }

        .mission-vision-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
        }

        .mv-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            padding: 36px 32px;
            border-top: 4px solid var(--navy);
            box-shadow: var(--shadow-sm);
        }

        .mv-card--gold { border-top-color: var(--gold); }

        .mv-card h3 {
            color: var(--navy);
            margin-bottom: 14px;
            font-size: 1.1rem;
        }

        .mv-card p { font-size: 0.95rem; line-height: 1.75; }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }

        .value-chip {
            background: var(--white);
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius);
            padding: 18px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: var(--transition);
        }

        .value-chip:hover {
            border-color: var(--navy);
            background: var(--sky);
        }

        .value-chip__dot {
            width: 10px;
            height: 10px;
            background: var(--gold);
            border-radius: 50%;
            flex-shrink: 0;
        }

        .value-chip span {
            font-weight: 700;
            font-size: 0.95rem;
            color: var(--navy);
        }

        .leadership-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 280px));
            gap: 24px;
            justify-content: center;
        }

        .leader-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            text-align: center;
            transition: var(--transition);
        }

        .leader-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-lg); }

        .leader-card__img {
            background: var(--sky);
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
        }

        .leader-card__info { padding: 20px; }

        .leader-card h4 {
            color: var(--navy);
            margin-bottom: 5px;
        }

        .leader-card p { font-size: 0.88rem; color: var(--text-muted); }

        .objectives-list li {
            display: flex;
            gap: 14px;
            padding: 14px 0;
            border-bottom: 1px solid var(--gray-100);
            font-size: 0.95rem;
            line-height: 1.6;
            color: var(--text-light);
        }

        .objectives-list li:last-child { border-bottom: none; }

        .objectives-list li::before {
            content: '';
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--gold);
            margin-top: 7px;
            flex-shrink: 0;
        }

        /* ============================================================
           PROGRAMS PAGE
        ============================================================ */

        .program-block {
            background: var(--white);
            border-radius: var(--radius-lg);
            padding: 40px;
            border: 1.5px solid var(--gray-100);
            transition: var(--transition);
            margin-bottom: 24px;
        }

        .program-block:hover {
            border-color: var(--blue);
            box-shadow: var(--shadow);
        }

        .program-block__header {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 20px;
        }

        .program-block h2 {
            color: var(--navy);
            font-size: 1.4rem;
            margin-bottom: 6px;
        }

        .program-block__body {
            font-size: 0.97rem;
            line-height: 1.8;
            color: var(--text-light);
            margin-bottom: 20px;
        }

        .program-block__details {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        .detail-pill {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.82rem;
            font-weight: 600;
            color: var(--text-muted);
            background: var(--gray-50);
            padding: 6px 12px;
            border-radius: var(--radius-pill);
        }

        /* ============================================================
           JOIN PAGE
        ============================================================ */

        .join-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
        }

        .form-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            padding: 40px;
            box-shadow: var(--shadow-sm);
            border: 1.5px solid var(--gray-100);
        }

        .form-card__header {
            margin-bottom: 28px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--gray-100);
        }

        .form-card__header h2 {
            color: var(--navy);
            font-size: 1.4rem;
            margin-bottom: 8px;
        }

        .form-card__header p { font-size: 0.9rem; }

        .form-card .btn { width: 100%; justify-content: center; margin-top: 8px; }

        .volunteer-cta {
            background: var(--navy);
            border-radius: var(--radius-xl);
            padding: 48px;
            text-align: center;
            margin-top: 40px;
            position: relative;
            overflow: hidden;
        }

        .volunteer-cta::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 60% 70% at 50% 120%, rgba(255,179,0,0.12) 0%, transparent 60%);
        }

        .volunteer-cta * { position: relative; z-index: 1; }

        .volunteer-cta h3 { color: var(--white); margin-bottom: 10px; }
        .volunteer-cta p { color: rgba(255,255,255,0.65); margin-bottom: 20px; }

        /* ============================================================
           IMPACT PAGE
        ============================================================ */

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .gallery-item {
            border-radius: var(--radius);
            overflow: hidden;
            aspect-ratio: 4/3;
            background: var(--sky);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.45s var(--ease);
        }

        .gallery-item:hover img { transform: scale(1.06); }

        .gallery-item--tall {
            grid-row: span 2;
            aspect-ratio: auto;
        }

        .empty-gallery {
            grid-column: 1 / -1;
            background: var(--white);
            border-radius: var(--radius-lg);
            border: 2px dashed var(--gray-200);
            padding: 80px 40px;
            text-align: center;
        }

        .empty-gallery__icon {
            font-size: 3rem;
            margin-bottom: 16px;
        }

        /* ============================================================
           RESPONSIVE
        ============================================================ */

        @media (max-width: 900px) {

            .navbar__links { display: none; }
            .navbar__hamburger { display: flex; }

            .hero h1 { font-size: 2.5rem; }

            .stats-bar__inner { grid-template-columns: 1fr; }
            .stats-bar__item { border-right: none; border-bottom: 1px solid var(--gray-100); }
            .stats-bar__item:last-child { border-bottom: none; }

            .about-preview__grid  { grid-template-columns: 1fr; }
            .programs-grid        { grid-template-columns: 1fr; }
            .story-grid           { grid-template-columns: 1fr; }
            .story-grid__aside    { position: static; }
            .mission-vision-grid  { grid-template-columns: 1fr; }
            .values-grid          { grid-template-columns: 1fr 1fr; }
            .leadership-grid      { grid-template-columns: repeat(2, 1fr); }
            .join-grid            { grid-template-columns: 1fr; }
            .gallery-grid         { grid-template-columns: repeat(2, 1fr); }

            .footer__grid { grid-template-columns: 1fr; gap: 36px; }
            .footer__bottom { flex-direction: column; text-align: center; }
        }

        @media (max-width: 560px) {
            .hero__buttons { flex-direction: column; }
            .hero__buttons .btn { width: 100%; text-align: center; }
            .values-grid { grid-template-columns: 1fr; }
            .leadership-grid { grid-template-columns: 1fr; }
            .gallery-grid { grid-template-columns: 1fr; }
            .program-block__header { flex-direction: column; }
            .form-card { padding: 28px 22px; }
            .volunteer-cta { padding: 36px 24px; }
            .about-preview__badge { position: static; margin-top: 16px; display: inline-block; }
            .cta-section__buttons { flex-direction: column; align-items: center; }
            .cta-section__buttons .btn { width: 100%; max-width: 300px; }
        }

        /* ---- Animations ---- */
        .fade-up {
            opacity: 0;
            transform: translateY(24px);
            animation: fadeUp 0.6s var(--ease-out) forwards;
        }

        @keyframes fadeUp {
            to { opacity: 1; transform: translateY(0); }
        }

        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }

    </style>
</head>
<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        // Mobile menu toggle
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');

        if (hamburger && mobileMenu) {
            hamburger.addEventListener('click', () => {
                const open = mobileMenu.style.display === 'flex';
                mobileMenu.style.display = open ? 'none' : 'flex';
            });
        }

        // Active nav link
        const links = document.querySelectorAll('.navbar__links a, .navbar__mobile a');
        links.forEach(link => {
            if (link.href === window.location.href) {
                link.classList.add('active');
            }
        });
    </script>

</body>
</html>
