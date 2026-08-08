<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background: #fff0f5;
            color: #333;
        }

        /* NAVBAR */
        nav {
            background: #ff4d8d;
            padding: 16px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 12px rgba(255, 77, 141, 0.3);
        }

        nav .logo {
            font-size: 1.4rem;
            font-weight: 700;
            color: white;
            letter-spacing: 1px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 28px;
        }

        nav ul li a {
            color: rgba(255,255,255,0.85);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 400;
            transition: color 0.2s;
        }

        nav ul li a:hover { color: white; }

        /* HERO */
        .hero {
            background: linear-gradient(135deg, #ff4d8d, #ff85b3);
            color: white;
            text-align: center;
            padding: 80px 20px 100px;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 12px;
            text-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .hero p {
            font-size: 1.15rem;
            font-weight: 300;
            opacity: 0.9;
        }

        /* CARD */
        .container {
            display: flex;
            justify-content: center;
            margin-top: -48px;
            padding: 0 20px 60px;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 40px 52px;
            box-shadow: 0 12px 40px rgba(255, 77, 141, 0.15);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        .card .badge {
            display: inline-block;
            background: #fff0f5;
            color: #ff4d8d;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            padding: 6px 16px;
            border-radius: 20px;
            margin-bottom: 24px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #fce4ec;
            font-size: 0.95rem;
        }

        .info-row:last-child { border-bottom: none; }

        .info-row .key {
            color: #aaa;
            font-weight: 400;
        }

        .info-row .value {
            color: #333;
            font-weight: 600;
            text-align: right;
        }

        /* FOOTER */
        footer {
            background: #ff4d8d;
            color: rgba(255,255,255,0.8);
            text-align: center;
            padding: 18px;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">&#127800; HelloLaravel</div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="hero">
        <h1>Hello Laravel!</h1>
        <p>Welcome to Client-Server Technologies.</p>
    </div>

    <div class="container">
        <div class="card">
            <div class="badge">&#10024; Developed by</div>
            <div class="info-row">
                <span class="key">Name</span>
                <span class="value">Chlouie Cabot</span>
            </div>
            <div class="info-row">
                <span class="key">Student No.</span>
                <span class="value">0124-1201</span>
            </div>
            <div class="info-row">
                <span class="key">Course</span>
                <span class="value">ITST 302 – Client-Server Technologies</span>
            </div>
            <div class="info-row">
                <span class="key">Section</span>
                <span class="value">BSIT 3C</span>
            </div>
            <div class="info-row">
                <span class="key">Date</span>
                <span class="value">{{ now()->format('F d, Y') }}</span>
            </div>
        </div>
    </div>

    <footer>
        &copy; {{ now()->year }} Chlouie Cabot &mdash; ITST 302 Client-Server Technologies
    </footer>

</body>
</html>
