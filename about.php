<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tumbuh Lestari - About Us</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', Arial, sans-serif;
            background: #e9ded6;
            color: #5a4634;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px 48px 12px 48px;
            background: transparent;
        }
        .logo {
            font-weight: bold;
            font-size: 22px;
            color: #a94442;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
        }
        .logo span {
            font-family: serif;
            font-size: 32px;
            margin-right: 8px;
            color: #a94442;
        }
        .nav-menu {
            display: flex;
            gap: 32px;
        }
        .nav-menu a {
            text-decoration: none;
            color: #5a4634;
            font-weight: 500;
            font-size: 16px;
            transition: color 0.2s;
        }
        .nav-menu a:hover {
            color: #ff8800;
        }
        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 48px 24px;
        }
        .about-header {
            text-align: center;
            margin-bottom: 48px;
        }
        .about-title {
            font-size: 36px;
            color: #a94442;
            margin-bottom: 16px;
        }
        .about-subtitle {
            font-size: 18px;
            color: #a68a64;
            max-width: 600px;
            margin: 0 auto;
        }
        .about-content {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 48px;
            margin-bottom: 48px;
        }
        .about-section {
            background: #fff;
            padding: 32px;
            border-radius: 8px;
            box-shadow: 0 4px 16px rgba(90,70,52,0.1);
        }
        .about-section h2 {
            color: #a94442;
            margin-bottom: 16px;
        }
        .about-section p {
            color: #5a4634;
            line-height: 1.6;
            margin-bottom: 16px;
        }
        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 48px;
        }
        .value-card {
            background: #fff;
            padding: 24px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 16px rgba(90,70,52,0.1);
        }
        .value-card h3 {
            color: #a94442;
            margin-bottom: 12px;
        }
        .value-card p {
            color: #5a4634;
            font-size: 14px;
            line-height: 1.5;
        }
        @media (max-width: 900px) {
            .about-content {
                grid-template-columns: 1fr;
            }
            .values-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                padding: 16px;
            }
            .values-grid {
                grid-template-columns: 1fr;
            }
            .about-container {
                padding: 24px 16px;
            }
        }
        .about-main {
            display: flex;
            min-height: 480px;
            background: #e9ded6;
            margin: 48px auto 0 auto;
            max-width: 1200px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(90,70,52,0.08);
        }
        .about-image {
            flex: 1.1;
            min-width: 320px;
            background: #c7b299;
            display: flex;
            align-items: stretch;
            justify-content: stretch;
        }
        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .about-content-bg {
            flex: 1.5;
            background: #e9ded6 url('https://svgshare.com/i/14kA.svg'); /* motif biji kopi SVG transparan */
            background-repeat: repeat;
            background-size: 120px;
            padding: 48px 40px 40px 40px;
            display: flex;
            align-items: center;
        }
        .about-header {
            width: 100%;
        }
        .about-title {
            color: #a94442;
            font-size: 20px;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .about-headline {
            font-size: 32px;
            color: #5a4634;
            margin-bottom: 18px;
            font-weight: 700;
            line-height: 1.2;
        }
        .about-headline .highlight {
            color: #a94442;
        }
        .about-desc {
            color: #5a4634;
            font-size: 16px;
            margin-bottom: 32px;
            line-height: 1.7;
            max-width: 600px;
        }
        .about-stats {
            display: flex;
            gap: 48px;
            margin-top: 16px;
        }
        .stat {
            text-align: left;
        }
        .stat-value {
            font-size: 32px;
            color: #a94442;
            font-weight: bold;
            margin-bottom: 4px;
        }
        .stat-label {
            color: #5a4634;
            font-size: 15px;
            max-width: 180px;
        }
        @media (max-width: 900px) {
            .about-main {
                flex-direction: column;
                min-height: unset;
            }
            .about-content-bg {
                padding: 32px 16px;
            }
            .about-stats {
                gap: 24px;
            }
        }
        @media (max-width: 600px) {
            .about-main {
                border-radius: 0;
                margin: 0;
            }
            .about-content-bg {
                padding: 20px 8px;
            }
            .about-headline {
                font-size: 22px;
            }
            .stat-value {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo"><span>TL</span> Tumbuh Lestari</div>
        <div class="nav-menu">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="#contact">Contact</a>
            <a href="produk.php">Products</a>
            <a href="blog.php">Blog</a>
        </div>
    </div>

    <div class="about-main">
        <div class="about-image">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Hutan kopi" />
        </div>
        <div class="about-content-bg">
            <div class="about-header">
                <h2 class="about-title">About Us</h2>
                <h1 class="about-headline">Nikmati kopi terbaik <span class="highlight">dengan cita rasa otentik</span></h1>
                <p class="about-desc">Sambutlah aroma segar dan kenikmatan yang tiada tara dengan setiap tegukan kopi kami. Kopi Tumbuh Lestari menghadirkan lebih dari sekadar secangkir kopi. Tapi di balik setiap biji yang dipanggang dengan cermat, terdapat cerita tentang cinta pada alam. Dengan setiap tanaman yang kami pelihara, kami menghidupkan kembali bumi yang kita cintai.</p>
                <div class="about-stats">
                    <div class="stat">
                        <div class="stat-value">100%</div>
                        <div class="stat-label">Biji kopi asli dipetik oleh petani profesional.</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">50+</div>
                        <div class="stat-label">Biji kopi asli dipetik oleh petani profesional.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html> 