<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — The Giant Tribe</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,700;12..96,800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <style>

        :root {
            --navy:      #0D2D8A;
            --navy-dark: #081e5e;
            --blue:      #2255CC;
            --sky:       #E8EEFB;
            --gold:      #FFB300;
            --white:     #ffffff;
            --gray-200:  #dde3f0;
            --text:      #111827;
            --text-light: #4b5568;
            --text-muted: #7a87a0;
            --danger:    #ef4444;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--navy-dark);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Background effects */
        body::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 70% 70% at 80% 20%, rgba(34,85,204,0.35) 0%, transparent 60%),
                radial-gradient(ellipse 50% 50% at 10% 80%, rgba(255,179,0,0.08) 0%, transparent 50%);
            pointer-events: none;
        }

        body::after {
            content: '';
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle, rgba(255,255,255,0.04) 1px, transparent 1px);
            background-size: 36px 36px;
            pointer-events: none;
        }

        /* Card */
        .login-card {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 20px 80px rgba(0,0,0,0.35), 0 4px 20px rgba(0,0,0,0.2);
            width: min(92%, 420px);
            overflow: hidden;
            position: relative;
            z-index: 1;
            animation: slideUp 0.5s cubic-bezier(0, 0, 0.2, 1) both;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* Card Header */
        .login-card__header {
            background: var(--navy);
            padding: 36px 40px 32px;
            text-align: center;
            position: relative;
        }

        .login-card__badge {
            width: 56px;
            height: 56px;
            background: var(--gold);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Bricolage Grotesque', sans-serif;
            font-size: 0.9rem;
            font-weight: 900;
            color: var(--navy-dark);
            margin: 0 auto 16px;
            box-shadow: 0 4px 16px rgba(255,179,0,0.35);
        }

        .login-card__header h1 {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-size: 1.3rem;
            font-weight: 800;
            color: var(--white);
            line-height: 1.3;
            margin-bottom: 6px;
        }

        .login-card__header p {
            color: rgba(255,255,255,0.5);
            font-size: 0.85rem;
        }

        /* Card Body */
        .login-card__body { padding: 36px 40px; }

        /* Error */
        .login-error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fca5a5;
            border-radius: 8px;
            padding: 12px 14px;
            font-size: 0.88rem;
            font-weight: 500;
            margin-bottom: 22px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Form */
        .form-group { margin-bottom: 18px; }

        label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-light);
            margin-bottom: 7px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border: 1.5px solid var(--gray-200);
            border-radius: 9px;
            font-size: 0.95rem;
            color: var(--text);
            background: var(--white);
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input:focus {
            border-color: var(--blue);
            box-shadow: 0 0 0 3px rgba(34,85,204,0.1);
        }

        input::placeholder { color: var(--text-muted); }

        .login-btn {
            width: 100%;
            padding: 13px;
            background: var(--navy);
            color: var(--white);
            border: none;
            border-radius: 9px;
            font-size: 0.97rem;
            font-weight: 700;
            margin-top: 8px;
            transition: all 0.25s;
            cursor: pointer;
        }

        .login-btn:hover {
            background: var(--navy-dark);
            transform: translateY(-1px);
            box-shadow: 0 6px 24px rgba(13,45,138,0.3);
        }

        .login-btn:active { transform: translateY(0); }

        /* Back link */
        .back-to-site {
            text-align: center;
            margin-top: 20px;
        }

        .back-to-site a {
            color: var(--text-muted);
            font-size: 0.85rem;
            text-decoration: none;
            transition: color 0.2s;
        }

        .back-to-site a:hover { color: var(--navy); }

    </style>
</head>
<body>

    <div class="login-card">

        <div class="login-card__header">
            <div class="login-card__badge">TGT</div>
            <h1>Admin Access</h1>
            <p>The Giant Tribe Community</p>
        </div>

        <div class="login-card__body">

            @if(session('error'))
                <div class="login-error">
                    ⚠️ {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.auth') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email"
                           placeholder="admin@example.com"
                           value="{{ old('email') }}"
                           autocomplete="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password"
                           placeholder="Enter your password"
                           autocomplete="current-password" required>
                </div>

                <button type="submit" class="login-btn">
                    Sign In to Dashboard
                </button>

            </form>

        </div>

    </div>

    <div class="back-to-site" style="position:relative;z-index:1;margin-top:20px;">
        <a href="{{ route('home') }}">← Back to website</a>
    </div>

</body>
</html>
