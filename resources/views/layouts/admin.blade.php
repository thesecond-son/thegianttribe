<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') — TGT Dashboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600;12..96,700;12..96,800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>

        /* ============================================================
           ADMIN PANEL CSS — THE GIANT TRIBE
        ============================================================ */

        :root {
            --navy:        #0D2D8A;
            --navy-dark:   #081e5e;
            --navy-mid:    #163694;
            --blue:        #2255CC;
            --sky:         #E8EEFB;
            --sky-dark:    #d4ddf7;
            --gold:        #FFB300;
            --gold-dark:   #d99800;
            --gold-pale:   #fff4d6;
            --white:       #ffffff;
            --bg:          #f4f7ff;
            --gray-50:     #f8fafc;
            --gray-100:    #eef1f8;
            --gray-200:    #dde3f0;
            --gray-400:    #8e9ab5;
            --gray-500:    #64748b;
            --gray-700:    #374151;
            --text:        #111827;
            --text-light:  #4b5568;
            --text-muted:  #7a87a0;
            --danger:      #ef4444;
            --danger-bg:   #fee2e2;
            --success:     #22c55e;
            --success-bg:  #d1fae5;

            --sidebar-w:   250px;
            --topbar-h:    64px;
            --shadow-sm:   0 1px 6px rgba(13,45,138,0.07);
            --shadow:      0 3px 16px rgba(13,45,138,0.11);
            --shadow-lg:   0 6px 32px rgba(13,45,138,0.16);
            --radius-sm:   8px;
            --radius:      12px;
            --radius-lg:   18px;
            --ease:        cubic-bezier(0.4, 0, 0.2, 1);
            --transition:  all 0.25s var(--ease);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--text);
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4 {
            font-family: 'Bricolage Grotesque', sans-serif;
            line-height: 1.25;
            color: var(--text);
        }

        a { text-decoration: none; color: inherit; }
        img { max-width: 100%; }
        button { font-family: inherit; cursor: pointer; }
        input { font-family: inherit; }

        /* ---- Admin Layout ---- */
        .admin-layout {
            display: flex;
            min-height: 100vh;
        }

        /* ---- Sidebar ---- */
        .sidebar {
            width: var(--sidebar-w);
            background: var(--navy-dark);
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            z-index: 100;
            transition: var(--transition);
        }

        .sidebar__brand {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 20px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.07);
        }

        .sidebar__brand-badge {
            width: 36px;
            height: 36px;
            background: var(--gold);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: 900;
            color: var(--navy-dark);
            font-family: 'Bricolage Grotesque', sans-serif;
            flex-shrink: 0;
        }

        .sidebar__brand-text {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-weight: 700;
            font-size: 0.85rem;
            color: var(--white);
            line-height: 1.3;
        }

        .sidebar__brand-text span {
            display: block;
            font-size: 0.7rem;
            font-weight: 400;
            color: rgba(255,255,255,0.4);
            font-family: 'DM Sans', sans-serif;
        }

        .sidebar__nav {
            padding: 16px 12px;
            flex: 1;
        }

        .sidebar__section-label {
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: rgba(255,255,255,0.3);
            padding: 0 10px;
            margin: 16px 0 8px;
        }

        .sidebar__nav a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 12px;
            border-radius: var(--radius-sm);
            color: rgba(255,255,255,0.6);
            font-size: 0.9rem;
            font-weight: 500;
            transition: var(--transition);
            margin-bottom: 2px;
        }

        .sidebar__nav a:hover,
        .sidebar__nav a.active {
            background: rgba(255,255,255,0.08);
            color: var(--white);
        }

        .sidebar__nav a.active {
            background: rgba(34,85,204,0.4);
            color: var(--white);
        }

        .sidebar__nav a .nav-icon {
            font-size: 1rem;
            width: 20px;
            text-align: center;
        }

        .sidebar__footer {
            padding: 16px 12px;
            border-top: 1px solid rgba(255,255,255,0.07);
        }

        .sidebar__logout {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 12px;
            border-radius: var(--radius-sm);
            background: rgba(239,68,68,0.15);
            color: rgba(239,68,68,0.85);
            font-size: 0.88rem;
            font-weight: 600;
            transition: var(--transition);
            width: 100%;
        }

        .sidebar__logout:hover {
            background: rgba(239,68,68,0.25);
            color: #fca5a5;
        }

        /* ---- Main Area ---- */
        .admin-main {
            margin-left: var(--sidebar-w);
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ---- Topbar ---- */
        .admin-topbar {
            background: var(--white);
            border-bottom: 1px solid var(--gray-100);
            height: var(--topbar-h);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 28px;
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: var(--shadow-sm);
        }

        .admin-topbar__title {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--navy);
        }

        .admin-topbar__right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .admin-topbar__user {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--text-light);
        }

        .admin-topbar__avatar {
            width: 34px;
            height: 34px;
            background: var(--sky);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            color: var(--navy);
        }

        /* ---- Content ---- */
        .admin-content {
            padding: 32px 28px;
            flex: 1;
        }

        /* ---- Stats Cards ---- */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 36px;
        }

        .stat-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            padding: 24px;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--gray-100);
            display: flex;
            align-items: flex-start;
            gap: 16px;
            transition: var(--transition);
        }

        .stat-card:hover { box-shadow: var(--shadow); }

        .stat-card__icon {
            width: 48px;
            height: 48px;
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .stat-card__icon--blue { background: var(--sky); }
        .stat-card__icon--gold { background: var(--gold-pale); }

        .stat-card__num {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-size: 2rem;
            font-weight: 800;
            color: var(--navy);
            line-height: 1;
        }

        .stat-card__label {
            font-size: 0.82rem;
            color: var(--text-muted);
            font-weight: 500;
            margin-top: 5px;
        }

        /* ---- Section Title ---- */
        .admin-section-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px;
        }

        .admin-section-title h2 {
            font-size: 1.1rem;
            color: var(--navy);
        }

        /* ---- Search Bar ---- */
        .search-bar {
            display: flex;
            gap: 10px;
            margin-bottom: 16px;
        }

        .search-bar input {
            flex: 1;
            padding: 10px 14px;
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius-sm);
            font-size: 0.9rem;
            outline: none;
            transition: var(--transition);
            color: var(--text);
        }

        .search-bar input:focus {
            border-color: var(--blue);
            box-shadow: 0 0 0 3px rgba(34,85,204,0.1);
        }

        .search-bar button {
            padding: 10px 18px;
            background: var(--navy);
            color: var(--white);
            border: none;
            border-radius: var(--radius-sm);
            font-size: 0.88rem;
            font-weight: 600;
            transition: var(--transition);
        }

        .search-bar button:hover { background: var(--navy-dark); }

        /* ---- Data Table ---- */
        .table-wrap {
            background: var(--white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--gray-100);
            overflow: hidden;
            margin-bottom: 36px;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table thead th {
            background: var(--navy);
            color: rgba(255,255,255,0.85);
            padding: 13px 16px;
            text-align: left;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            white-space: nowrap;
        }

        .data-table tbody tr {
            border-bottom: 1px solid var(--gray-100);
            transition: background 0.15s;
        }

        .data-table tbody tr:last-child { border-bottom: none; }

        .data-table tbody tr:hover { background: var(--gray-50); }

        .data-table td {
            padding: 13px 16px;
            font-size: 0.9rem;
            color: var(--text-light);
            vertical-align: middle;
        }

        .data-table td:first-child {
            font-weight: 600;
            color: var(--text);
        }

        .data-table td.actions {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .data-table .empty-row td {
            text-align: center;
            padding: 40px;
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* ---- Action Buttons ---- */
        .btn-view {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 6px 12px;
            background: var(--sky);
            color: var(--navy);
            border-radius: var(--radius-sm);
            font-size: 0.8rem;
            font-weight: 700;
            transition: var(--transition);
            border: none;
        }

        .btn-view:hover { background: var(--sky-dark); }

        .btn-delete {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 6px 12px;
            background: var(--danger-bg);
            color: var(--danger);
            border-radius: var(--radius-sm);
            font-size: 0.8rem;
            font-weight: 700;
            transition: var(--transition);
            border: none;
        }

        .btn-delete:hover {
            background: var(--danger);
            color: var(--white);
        }

        /* ---- Alert ---- */
        .alert {
            padding: 13px 16px;
            border-radius: var(--radius-sm);
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 24px;
        }

        .alert-success {
            background: var(--success-bg);
            color: #065f46;
            border: 1px solid #6ee7b7;
        }

        /* ---- Detail Card ---- */
        .detail-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--gray-100);
            overflow: hidden;
            max-width: 680px;
        }

        .detail-card__header {
            background: var(--navy);
            padding: 24px 28px;
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .detail-card__avatar {
            width: 52px;
            height: 52px;
            background: rgba(255,255,255,0.12);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
        }

        .detail-card__header h2 {
            color: var(--white);
            font-size: 1.2rem;
        }

        .detail-card__header p {
            color: rgba(255,255,255,0.6);
            font-size: 0.88rem;
            margin-top: 2px;
        }

        .detail-card__body { padding: 28px; }

        .detail-row {
            display: grid;
            grid-template-columns: 140px 1fr;
            gap: 8px 16px;
            padding: 13px 0;
            border-bottom: 1px solid var(--gray-100);
            font-size: 0.92rem;
        }

        .detail-row:last-child { border-bottom: none; }

        .detail-row__label {
            color: var(--text-muted);
            font-weight: 600;
            font-size: 0.82rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            padding-top: 2px;
        }

        .detail-row__value { color: var(--text); font-weight: 500; }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--blue);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 24px;
            transition: var(--transition);
        }

        .back-link:hover { color: var(--navy); }

        /* ---- Pagination -- */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 8px;
            padding: 20px;
        }

        /* ---- Responsive ---- */
        @media (max-width: 900px) {
            .sidebar { transform: translateX(-100%); }
            .admin-main { margin-left: 0; }
            .admin-content { padding: 20px 16px; }
        }

    </style>
</head>
<body>

<div class="admin-layout">

    {{-- Sidebar --}}
    <aside class="sidebar">

        <div class="sidebar__brand">
            <div class="sidebar__brand-badge">TGT</div>
            <div class="sidebar__brand-text">
                Giant Tribe
                <span>Admin Panel</span>
            </div>
        </div>

        <nav class="sidebar__nav">

            <div class="sidebar__section-label">Overview</div>

            <a href="{{ route('admin.dashboard') }}"
               class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <span class="nav-icon">📊</span>
                Dashboard
            </a>

            <div class="sidebar__section-label">Applications</div>

            <a href="{{ route('admin.dashboard') }}#students"
               class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <span class="nav-icon">🎓</span>
                Students
            </a>

            <a href="{{ route('admin.dashboard') }}#partners">
                <span class="nav-icon">🤝</span>
                Partners
            </a>

            <div class="sidebar__section-label">Site</div>

            <a href="{{ route('home') }}" target="_blank">
                <span class="nav-icon">🌐</span>
                View Website
            </a>

        </nav>

        <div class="sidebar__footer">
            <a href="{{ route('admin.logout') }}" class="sidebar__logout">
                <span>🚪</span>
                Logout
            </a>
        </div>

    </aside>

    {{-- Main --}}
    <div class="admin-main">

        {{-- Topbar --}}
        <header class="admin-topbar">
            <div class="admin-topbar__title">@yield('page-title', 'Dashboard')</div>
            <div class="admin-topbar__right">
                <div class="admin-topbar__user">
                    <div class="admin-topbar__avatar">👤</div>
                    Admin
                </div>
            </div>
        </header>

        {{-- Page Content --}}
        <div class="admin-content">
            @yield('admin-content')
        </div>

    </div>

</div>

</body>
</html>
