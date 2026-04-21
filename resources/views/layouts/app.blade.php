<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Giant Tribe</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Internal Styles (we will upgrade later) -->
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #E8EEFB;
        }

        .container {
            width: 90%;
            margin: auto;
        }

        /* Navbar */
        .navbar {
            background-color: #0D2D8A;
            padding: 15px 0;
        }

        .navbar .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 500;
        }

        .logo {
            color: white;
            font-weight: bold;
            font-size: 18px;
        }

        /* Footer */
        .footer {
            background-color: #0D2D8A;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }

        /* HERO SECTION */
.hero {
    background: linear-gradient(rgba(13,45,138,0.85), rgba(13,45,138,0.9)),
                url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f');
    background-size: cover;
    background-position: center;
    height: 90vh;
    display: flex;
    align-items: center;
    color: white;
}

.hero-content {
    max-width: 600px;
}

.hero-text h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.hero-text h1 span {
    color: #FFB300;
}

.hero-text p {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 30px;
}

/* Buttons */
.hero-buttons a {
    text-decoration: none;
    padding: 12px 25px;
    margin-right: 15px;
    border-radius: 5px;
    font-weight: 600;
}

.btn-primary {
    background-color: #FFB300;
    color: #000;
}

.btn-secondary {
    border: 2px solid white;
    color: white;
}

/* ABOUT PREVIEW */
.about-preview {
    background-color: white;
    padding: 80px 0;
    text-align: center;
}

.about-preview h2 {
    font-size: 32px;
    color: #0D2D8A;
    margin-bottom: 20px;
}

.about-preview p {
    max-width: 700px;
    margin: auto;
    font-size: 18px;
    line-height: 1.7;
    margin-bottom: 30px;
}


/* PROGRAMS */
.programs {
    padding: 80px 0;
    background-color: #E8EEFB;
}

.programs h2 {
    text-align: center;
    font-size: 32px;
    color: #0D2D8A;
    margin-bottom: 40px;
}

.program-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
}

.program-card {
    background-color: white;
    padding: 25px;
    border-radius: 10px;
    transition: 0.3s;
}

.program-card:hover {
    transform: translateY(-5px);
}

.program-card h3 {
    color: #2255CC;
    margin-bottom: 15px;
}

.program-card p {
    font-size: 15px;
    line-height: 1.6;
}

/* ABOUT PAGE */
.about-page {
    padding: 80px 0;
    background-color: white;
}

.about-page h1 {
    text-align: center;
    color: #0D2D8A;
    margin-bottom: 30px;
}

.about-page .intro {
    font-size: 18px;
    text-align: center;
    max-width: 800px;
    margin: auto;
    margin-bottom: 30px;
}

.mission-vision {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.mission-vision h3 {
    color: #2255CC;
}

/* LEADERS */
.leadership {
    margin-top: 60px;
    text-align: center;
}

.leaders {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-top: 20px;
}

.leader-card {
    background: #E8EEFB;
    padding: 20px;
    border-radius: 10px;
    width: 200px;
}

/* PROGRAMS PAGE */
.programs-page {
    padding: 80px 0;
    background-color: #E8EEFB;
}

.programs-page h1 {
    text-align: center;
    color: #0D2D8A;
    margin-bottom: 20px;
}

.programs-page .intro {
    text-align: center;
    max-width: 700px;
    margin: auto;
    margin-bottom: 50px;
    font-size: 18px;
}

/* PROGRAM BLOCK */
.program-block {
    background-color: white;
    padding: 30px;
    margin-bottom: 30px;
    border-radius: 10px;
}

.program-block h2 {
    color: #2255CC;
    margin-bottom: 10px;
}

.program-block .tag {
    color: #FFB300;
    font-weight: 600;
    margin-bottom: 15px;
}

/* JOIN PAGE */
.join-page {
    padding: 80px 0;
    background-color: #E8EEFB;
}

.join-page h1 {
    text-align: center;
    color: #0D2D8A;
    margin-bottom: 20px;
}

.join-page .intro {
    text-align: center;
    max-width: 700px;
    margin: auto;
    margin-bottom: 50px;
    font-size: 18px;
}

/* GRID */
.join-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

/* FORM CARD */
.form-card {
    background: white;
    padding: 30px;
    border-radius: 10px;
}

.form-card h2 {
    margin-bottom: 20px;
    color: #2255CC;
}

/* INPUTS */
.form-card input {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* BUTTON */
.form-card button {
    width: 100%;
    padding: 12px;
    background-color: #FFB300;
    border: none;
    font-weight: bold;
    cursor: pointer;
}

/* VOLUNTEER */
.volunteer {
    text-align: center;
    margin-top: 50px;
}
    </style>
</head>
<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>