<?php
include 'koneksi.php';

// Ambil beberapa data produk terbaru
$produk_promo = [];
$q_promo = mysqli_query($conn, "SELECT * FROM produk ORDER BY created_at DESC LIMIT 3"); // Ambil 3 produk terbaru
if ($q_promo) {
    while ($row_promo = mysqli_fetch_assoc($q_promo)) {
        $produk_promo[] = $row_promo;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tumbuh Lestari - Landing Page</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
    <style>
        :root {
            --coklat-bg: #d6b89c;
            --coklat-tua: #a06a2b;
            --coklat-muda: #c7a97b;
            --putih: #fff;
            --coklat-teks: #a06a2b;
            --coklat-btn: #a06a2b;
            --coklat-btn-hover: #8b5c1e;
        }
        body {
            margin: 0;
            font-family: 'Montserrat', Arial, sans-serif;
            background: var(--coklat-bg);
            color: var(--coklat-teks);
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 32px 48px 0 48px;
            background: transparent;
        }
        .logo {
            font-size: 2.2rem;
            font-weight: bold;
            color: var(--coklat-tua);
            letter-spacing: 2px;
            font-family: serif;
        }
        .logo span {
            color: #b23b1a;
            font-family: serif;
            font-size: 2.5rem;
            font-weight: bold;
            margin-right: 8px;
            letter-spacing: 0;
        }
        .nav-menu {
            display: flex;
            gap: 32px;
        }
        .nav-menu a {
            text-decoration: none;
            color: var(--putih);
            font-weight: 500;
            font-size: 1.1rem;
            transition: color 0.2s;
            position: relative;
        }
        .nav-menu a.active, .nav-menu a:hover {
            color: var(--coklat-tua);
        }
        .nav-menu a.active::after, .nav-menu a:hover::after {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background: var(--coklat-tua);
            position: absolute;
            left: 0;
            bottom: -4px;
        }
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 64px 48px 0 48px;
            position: relative;
        }
        .hero-bg-motif {
            position: absolute;
            left: 0; top: 0; bottom: 0; width: 50vw; z-index: 0;
            background: url('https://svgshare.com/i/14kf.svg') left top repeat-y;
            opacity: 0.13;
        }
        .hero-text {
            max-width: 50%;
            z-index: 1;
        }
        .hero-title {
            font-size: 4rem;
            font-weight: 700;
            color: var(--coklat-tua);
            letter-spacing: 1px;
        }
        .hero-title span {
            color: var(--putih);
        }
        .hero-subtitle {
            font-size: 1.3rem;
            color: var(--putih);
            margin: 16px 0 0 0;
            font-weight: 400;
        }
        .hero-desc {
            color: var(--coklat-tua);
            font-size: 1.1rem;
            margin-bottom: 32px;
        }
        .hero-btn {
            background: var(--coklat-btn);
            color: var(--putih);
            border: none;
            padding: 14px 36px;
            font-size: 1.1rem;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.2s;
            margin-top: 32px;
        }
        .hero-btn:hover {
            background: var(--coklat-btn-hover);
        }
        .hero-img {
            z-index: 1;
        }
        .hero-img img {
            width: 400px;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.12);
        }
        .info-bar {
            display: flex;
            gap: 48px;
            margin: 48px 0 0 48px;
            font-size: 1.2rem;
        }
        .info-bar .stat-label {
            color: var(--coklat-tua);
            font-weight: 500;
        }
        .info-bar .stat-value {
            color: var(--putih);
            font-size: 1.3rem;
            font-weight: 700;
            margin-left: 8px;
        }
        @media (max-width: 900px) {
            .hero { flex-direction: column; padding: 32px 12px 0 12px; }
            .hero-text { max-width: 100%; text-align: center; }
            .hero-img img { width: 90vw; max-width: 350px; margin-top: 32px; }
            .info-bar { justify-content: center; margin-left: 0; }
            .navbar { flex-direction: column; gap: 16px; padding: 24px 12px 0 12px; }
        }
        /* --- About, Process, Offer, Footer: gunakan warna dan font yang sama --- */
        .about-main {
            display: flex;
            min-height: 480px;
            background: #b9935a;
            margin: 48px auto 0 auto;
            max-width: 1200px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(90,70,52,0.08);
        }
        .about-image {
            flex: 1.1;
            min-width: 320px;
            background: var(--coklat-muda);
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
            background: var(--coklat-bg) url('https://svgshare.com/i/14kA.svg');
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
            color: var(--coklat-tua);
            font-size: 20px;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .about-headline {
            font-size: 2.2rem;
            color: var(--putih);
            margin-bottom: 18px;
            font-weight: 700;
            line-height: 1.2;
        }
        .about-headline .highlight {
            color: var(--coklat-tua);
        }
        .about-desc {
            color: var(--putih);
            font-size: 1.1rem;
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
            font-size: 2rem;
            color: var(--coklat-tua);
            font-weight: bold;
            margin-bottom: 4px;
        }
        .stat-label {
            color: var(--putih);
            font-size: 1rem;
            max-width: 180px;
        }
        /* --- Proses Section --- */
        .process-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 64px 48px;
            min-height: 480px;
            background: #b9935a;
            margin: 48px auto;
            max-width: 1000px;
            border-radius: 24px;
            box-shadow: 0 8px 24px rgba(90,70,52,0.1);
            gap: 48px;
        }
        .process-steps {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 24px;
            padding-right: 24px;
            border-right: 1px solid rgba(255, 255, 255, 0.3);
        }
        .step {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        .step-number {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--coklat-tua);
        }
        .step-desc {
            font-size: 1rem;
            color: var(--putih);
            line-height: 1.5;
        }
        .process-overview {
            flex: 1.2;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding-left: 24px;
        }
        .coffee-beans-illustration {
            width: 100px;
            height: auto;
            margin-bottom: 24px;
        }
        .coffee-beans-illustration img {
            width: 100%;
            height: auto;
        }
        .overview-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--putih);
            margin-bottom: 12px;
        }
        .overview-desc {
            font-size: 1.1rem;
            color: var(--putih);
            line-height: 1.6;
            max-width: 400px;
            margin: 0 auto;
        }
        /* --- Penawaran Section --- */
        .offer-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 64px 48px;
            min-height: 480px;
            background: #b9935a;
            margin: 48px auto;
            max-width: 1000px;
            border-radius: 24px;
            box-shadow: 0 8px 24px rgba(90,70,52,0.1);
            position: relative;
            overflow: hidden;
        }
        .offer-container::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            width: 150px;
            height: 150px;
            background-image: url('https://svgshare.com/i/14kf.svg');
            background-size: contain;
            background-repeat: no-repeat;
            transform: translate(-50%, -50%);
            opacity: 0.13;
            z-index: 1;
        }
        .offer-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 40px;
            z-index: 2;
        }
        .header-text {
            max-width: 600px;
            text-align: left;
        }
        .offer-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--coklat-tua);
            margin-bottom: 12px;
        }
        .offer-desc {
            font-size: 1.1rem;
            color: var(--putih);
            line-height: 1.6;
            max-width: unset;
            margin: 0;
        }
        .btn-lihat-semua {
            background: var(--coklat-btn);
            color: var(--putih);
            border: none;
            padding: 12px 32px;
            border-radius: 4px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
            flex-shrink: 0;
        }
        .btn-lihat-semua:hover {
            background: var(--coklat-btn-hover);
        }
        .offer-products {
            display: flex;
            justify-content: center;
            gap: 24px;
            flex-wrap: wrap;
            z-index: 2;
        }
        .product-card {
            flex: 0 1 calc(33.333% - 16px);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 24px;
            background: var(--putih);
            border-radius: 8px;
            box-shadow: 0 4px 16px rgba(90,70,52,0.08);
        }
        .product-image {
            width: 100%;
            max-width: 200px;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 16px;
        }
        .product-name {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--coklat-tua);
            margin-bottom: 8px;
        }
        .product-process {
            font-size: 1rem;
            color: var(--coklat-tua);
            margin-bottom: 4px;
        }
        .product-process-desc {
            font-size: 1rem;
            color: var(--coklat-tua);
            }
        /* --- Footer --- */
        .footer-container {
            background-color: var(--coklat-tua);
            padding: 64px 24px 40px 24px;
            position: relative;
            overflow: hidden;
        }
        .footer-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background-image: url('https://svgshare.com/i/14kr.svg');
            background-size: cover;
            background-repeat: no-repeat;
            transform: translateY(-80px);
            z-index: 1;
        }
        .footer-content {
            display: flex;
            justify-content: space-between;
            max-width: 1000px;
            margin: 0 auto;
            gap: 24px;
            flex-wrap: wrap;
            z-index: 2;
            position: relative;
        }
        .footer-col {
            flex: 1 1 200px;
            text-align: left;
        }
        .footer-col h3 {
            color: var(--putih);
            font-size: 1.1rem;
            margin-bottom: 16px;
        }
        .footer-col ul {
            list-style: none;
            padding: 0;
        }
        .footer-col ul li {
            margin-bottom: 8px;
        }
        .footer-col ul li a {
            color: var(--putih);
            text-decoration: none;
            transition: color 0.2s;
        }
         .footer-col ul li a:hover {
            color: #e0c9a6;
        }
        .footer-col p {
            color: var(--putih);
            margin-bottom: 8px;
            font-size: 1rem;
        }
        .footer-col.subscribe .social-icons {
            display: flex;
            gap: 16px;
            justify-content: flex-start;
        }
        .footer-col.subscribe .social-icons a {
            display: block;
            width: 24px;
            height: 24px;
        }
        .footer-col.subscribe .social-icons a img {
            width: 100%;
            height: 100%;
        }
        .footer-copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.2);
            margin-top: 20px;
            z-index: 2;
            position: relative;
        }
        .footer-copyright p {
            color: var(--putih);
            font-size: 0.95rem;
        }
        @media (max-width: 900px) {
            .about-main, .process-container, .offer-container { flex-direction: column; min-height: unset; border-radius: 0; margin: 0; }
            .about-content-bg, .process-container, .offer-container { padding: 32px 16px; }
            .about-stats, .offer-products { gap: 24px; }
            .footer-content { flex-direction: column; align-items: center; gap: 32px; text-align: center; }
            .footer-col { flex: unset; width: 100%; text-align: center; }
            .footer-col.subscribe .social-icons { justify-content: center; }
            .footer-container::before { height: 60px; transform: translateY(-60px); }
        }
        @media (max-width: 600px) {
            .hero-title { font-size: 2.2rem; }
            .about-headline { font-size: 1.2rem; }
            .overview-title { font-size: 1.2rem; }
            .stat-value { font-size: 1.2rem; }
            .main-image img, .hero-img img { width: 90vw; max-width: 350px; }
            .footer-container::before { height: 40px; transform: translateY(-40px); }
          }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo"><span>TL</span> <span style="font-family:sans-serif;font-size:1.2rem;font-weight:400;letter-spacing:2px;color:#fff;vertical-align:middle;">TUMBUH LESTARI</span></div>
        <div class="nav-menu">
            <a href="index.php" class="active">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="productspage.php">Products</a>
            <a href="blogpage.php">Blog</a>
        </div>
    </div>
    <div class="hero">
        <div class="hero-bg-motif"></div>
        <div class="hero-text">
            <div class="hero-title">Tumbuh <span>Lestari</span></div>
            <div class="hero-subtitle">Menyulam Keharmonisan Lingkungan dan Kenikmatan Rasa</div>
            <button class="hero-btn" onclick="window.location.href='productspage.php'">Explore</button>
            <div class="info-bar">
                <div><span class="stat-label">Roast Fresh</span> <span class="stat-value">98% Fresh</span></div>
                <div><span class="stat-label">Bean Inventory</span> <span class="stat-value">1,234kg</span></div>
            </div>
        </div>
        <div class="hero-img">
            <img src="https://cdn.pixabay.com/photo/2017/02/27/16/29/coffee-beans-2103613_1280.jpg" alt="Coffee Beans">
        </div>
    </div>
    <!-- About Section -->
    <div id="about" class="about-main">
        <div class="about-image">
            <img src="https://cdn.pixabay.com/photo/2022/07/09/18/14/forest-7311484_1280.jpg" alt="Hutan kopi" />
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
    <!-- Proses Section -->
    <div id="process" class="process-container">
        <div class="process-steps">
            <div class="step">
                <div class="step-number">1. Panen</div>
                <div class="step-desc">Proses kopi dimulai dengan panen, di mana buah kopi dipetik secara selektif</div>
            </div>
            <div class="step">
                <div class="step-number">2. Roasting</div>
                <div class="step-desc">Biji kopi mentah dipanggang pada suhu tinggi untuk mengembangkan rasa dan aroma.</div>
            </div>
            <div class="step">
                <div class="step-number">3. Packaging</div>
                <div class="step-desc">Bubuk atau biji kopi yang sudah dipanggang dikemas dalam kemasan yang sesuai untuk menjaga kesegarannya.</div>
            </div>
        </div>
        <div class="process-overview">
            <div class="coffee-beans-illustration">
                <img src="https://cdn.pixabay.com/photo/2022/03/13/15/45/coffee-7066308_1280.jpg" alt="Coffee beans illustration" style="border-radius:12px;box-shadow:0 4px 16px rgba(0,0,0,0.08);"/>
            </div>
            <div class="overview-content">
                <h2 class="overview-title">Proses <span style="color:var(--coklat-tua);">Pengerjaan</span></h2>
                <p class="overview-desc">Proses kopi dari panen hingga pengemasan, biji kopi berkualitas tinggi siap untuk dijual dan dinikmati oleh konsumen.</p>
            </div>
        </div>
    </div>
    <!-- Penawaran Section -->
    <div id="offer" class="offer-container">
        <div class="offer-header">
            <div class="header-text">
                <h2 class="offer-title">Penawaran <span style="color:var(--putih);">Terbaik Kami</span></h2>
                <p class="offer-desc">Kami menyediakan berbagai macam produk berkualitas yang bisa Anda dapatkan dengan harga terbaik.</p>
            </div>
            <a href="productspage.php" class="btn-lihat-semua">Lihat Semua</a>
        </div>
        <div class="offer-products">
            <?php foreach ($produk_promo as $p): ?>
            <div class="product-card">
                <?php if (!empty($p['gambar'])): ?>
                    <img src="uploads/<?= htmlspecialchars($p['gambar']) ?>" alt="<?= htmlspecialchars($p['nama']) ?>" class="product-image"/>
                <?php else: ?>
                    <img src="https://via.placeholder.com/200x250?text=No+Image" alt="No image available" class="product-image"/>
                <?php endif; ?>
                <h3 class="product-name"><?= htmlspecialchars($p['nama']) ?></h3>
                <p class="product-process">Semiwash Process</p>
                <p class="product-process-desc">Proses olah giling basah (semi wash process).</p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer-container">
        <div class="footer-content">
            <div class="footer-col quick-links">
                <h3>Quick</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#offer">Products</a></li>
                    <li><a href="#blog">Blog</a></li>
                </ul>
            </div>
            <div class="footer-col connect-with">
                <h3>Connect with</h3>
                <p>tumbuhlestaritalks@gmail.com</p>
                <p>+62 838 3203 3996</p>
            </div>
            <div class="footer-col kerja-sama">
                <h3>Kerja Sama</h3>
                <p>Gudang Madala Haji</p>
                <p>Petani Milenial Sukarame</p>
            </div>
            <div class="footer-col subscribe">
                <h3>Subscribe now</h3>
                 <div class="social-icons">
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram"/></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"/></a>
                 </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>Copyright © 2024 Tumbuh Lestari</p>
        </div>
    </footer>
</body>
</html> 