<?php
include 'koneksi.php';

// Ambil beberapa data produk terbaru
$produk_promo = [];
$q_promo = mysqli_query($conn, "SELECT * FROM produk ORDER BY created_at DESC LIMIT 2"); // Ambil 2 produk terbaru
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
        .main {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 48px 64px 0 64px;
            min-height: 420px;
        }
        .main-text {
            max-width: 480px;
        }
        .main-title {
            font-size: 44px;
            font-weight: 700;
            color: #a68a64;
            margin-bottom: 8px;
        }
        .main-title span {
            color: #fff;
        }
        .main-desc {
            font-size: 16px;
            color: #a68a64;
            margin-bottom: 24px;
        }
        .btn-explore {
            background: #a94442;
            color: #fff;
            border: none;
            padding: 12px 32px;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn-explore:hover {
            background: #ff8800;
        }
        .main-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .main-image img {
            width: 320px;
            max-width: 100%;
            filter: drop-shadow(0 8px 32px rgba(90,70,52,0.18));
        }
        .info-bar {
            display: flex;
            justify-content: center;
            gap: 48px;
            margin: 32px 0 0 0;
            font-size: 16px;
            color: #a68a64;
        }
        .info-bar strong {
            color: #a94442;
            font-weight: bold;
        }
        @media (max-width: 900px) {
            .main { flex-direction: column; padding: 32px 16px 0 16px; }
            .main-image { margin-top: 32px; }
        }
        @media (max-width: 600px) {
            .navbar { flex-direction: column; padding: 16px; }
            .main { padding: 16px; }
            .main-title { font-size: 32px; }
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
        .process-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 64px 48px;
            min-height: 480px;
            background: #c7b299;
            margin: 48px auto;
            max-width: 1000px;
            border-radius: 12px;
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
            font-size: 24px;
            font-weight: 700;
            color: #5a4634;
        }
        .step-desc {
            font-size: 15px;
            color: #5a4634;
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
            font-size: 36px;
            font-weight: 700;
            color: #5a4634;
            margin-bottom: 12px;
        }
        .overview-desc {
            font-size: 16px;
            color: #5a4634;
            line-height: 1.6;
            max-width: 400px;
            margin: 0 auto;
        }
        @media (max-width: 900px) {
            .process-container {
                flex-direction: column;
                padding: 32px 16px;
                gap: 32px;
            }
            .process-steps {
                padding-right: 0;
                border-right: none;
                padding-bottom: 32px;
                border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            }
            .process-overview {
                padding-left: 0;
            }
        }
        @media (max-width: 600px) {
            .process-container {
                border-radius: 0;
                margin: 0;
            }
            .overview-title {
                font-size: 28px;
            }
            .step-number {
                font-size: 20px;
            }
        }
        .offer-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 64px 48px;
            min-height: 480px;
            background: #c7b299;
            margin: 48px auto;
            max-width: 1000px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(90,70,52,0.1);
        }
        .offer-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 32px;
        }
        .header-text {
            max-width: 600px;
        }
        .offer-title {
            font-size: 36px;
            font-weight: 700;
            color: #5a4634;
            margin-bottom: 12px;
        }
        .offer-desc {
            font-size: 16px;
            color: #5a4634;
            line-height: 1.6;
            max-width: 400px;
            margin: 0 auto;
        }
        .btn-lihat-semua {
            background: #a94442;
            color: #fff;
            border: none;
            padding: 12px 32px;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn-lihat-semua:hover {
            background: #ff8800;
        }
        .offer-products {
            display: flex;
            justify-content: center;
            gap: 48px;
        }
        .product-card {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 24px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 16px rgba(90,70,52,0.08);
        }
        .product-image {
            width: 200px;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 16px;
        }
        .product-name {
            font-size: 20px;
            font-weight: 700;
            color: #5a4634;
            margin-bottom: 8px;
        }
        .product-process {
            font-size: 14px;
            color: #5a4634;
            margin-bottom: 4px;
        }
        .product-process-desc {
            font-size: 14px;
            color: #5a4634;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo"><span>TL</span> Tumbuh Lestari</div>
        <div class="nav-menu">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#contact">Contact</a>
            <a href="#products">Products</a>
            <a href="#blog">Blog</a>
        </div>
    </div>
    <div class="main">
        <div class="main-text">
            <div class="main-title"><span>Tumbuh</span> Lestari</div>
            <div class="main-desc">Menyiup Keharmonisan Lingkungan dan Kenikmatan Rasa</div>
            <button class="btn-explore" onclick="window.location.href='login.php'">Explore</button>
        </div>
        <div class="main-image">
            <img src="https://img.freepik.com/free-vector/coffee-cup-coffee-beans_1284-42107.jpg?w=826&t=st=1718000000~exp=1718000600~hmac=placeholder" alt="Coffee Illustration">
        </div>
    </div>
    <div class="info-bar">
        <div>Roast Fresh <br><strong>98% Fresh</strong></div>
        <div>Bean Inventory <br><strong>1,234kg</strong></div>
    </div>

    <div id="about" class="about-main">
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
                <!-- Placeholder for coffee beans SVG -->
                <img src="https://svgshare.com/i/14kD.svg" alt="Coffee beans illustration" />
            </div>
            <div class="overview-content">
                <h2 class="overview-title">Proses Pengerjaan</h2>
                <p class="overview-desc">Proses kopi dari panen hingga pengemasan, biji kopi berkualitas tinggi siap untuk dijual dan dinikmati oleh konsumen.</p>
            </div>
        </div>
    </div>

    <div id="offer" class="offer-container">
        <div class="offer-header">
            <div class="header-text">
                <h2 class="offer-title">Penawaran Terbaik Kami</h2>
                <p class="offer-desc">Kami menyediakan berbagai macam produk berkualitas yang bisa Anda dapatkan dengan harga terbaik.</p>
            </div>
            <a href="produk.php" class="btn-lihat-semua">Lihat Semua</a>
        </div>
        <div class="offer-products">
            <?php foreach ($produk_promo as $p): ?>
            <div class="product-card">
                <?php if (!empty($p['gambar'])): // Check if image exists ?>
                    <img src="uploads/<?= htmlspecialchars($p['gambar']) ?>" alt="<?= htmlspecialchars($p['nama']) ?>" class="product-image"/>
                <?php else: // Placeholder if no image ?>
                    <img src="https://via.placeholder.com/200x250?text=No+Image" alt="No image available" class="product-image"/>
                <?php endif; ?>
                <h3 class="product-name"><?= htmlspecialchars($p['nama']) ?></h3>
                <!-- Assuming no specific process field, using static text for now -->
                <p class="product-process">Process Detail</p>
                <p class="product-process-desc">Detail proses pengolahan kopi ini.</p>
            </div>
            <?php endforeach; ?>
             <!-- Add more product cards here if needed -->
        </div>
    </div>

</body>
</html> 