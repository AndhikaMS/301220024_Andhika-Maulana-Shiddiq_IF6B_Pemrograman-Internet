<?php
include 'koneksi.php';

// Ambil data produk
$produk = [];
$q = mysqli_query($conn, "SELECT * FROM produk ORDER BY created_at DESC");
if ($q) {
    while ($row = mysqli_fetch_assoc($q)) {
        $produk[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tumbuh Lestari - Products</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', Arial, sans-serif;
            background: #d6b89c;
            color: #a06a2b;
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
            color: #a06a2b;
            letter-spacing: 2px;
            font-family: serif;
            display: flex;
            align-items: center;
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
            color: #fff;
            font-weight: 500;
            font-size: 1.1rem;
            transition: color 0.2s;
            position: relative;
        }
        .nav-menu a.active, .nav-menu a:hover {
            color: #a06a2b;
        }
        .nav-menu a.active::after, .nav-menu a:hover::after {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background: #a06a2b;
            position: absolute;
            left: 0;
            bottom: -4px;
        }
        /* Products Page Specific Styles */
        .products-hero {
            background: #d6b89c;
            padding: 80px 24px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .products-hero::before {
            content: url('https://svgshare.com/i/14k7.svg'); /* Left coffee bean */
            position: absolute;
            left: 10%;
            top: 30%;
            transform: translateY(-50%) rotate(0deg);
            opacity: 0.7;
            width: 80px;
            height: auto;
            pointer-events: none;
            z-index: 1;
        }

        .products-hero::after {
            content: url('https://svgshare.com/i/14kA.svg'); /* Right coffee bean with leaf */
            position: absolute;
            right: 10%;
            top: 70%;
            transform: translateY(-50%) rotate(90deg);
            opacity: 0.7;
            width: 80px;
            height: auto;
            pointer-events: none;
            z-index: 1;
        }

        .products-title {
            font-size: 38px;
            color: #a06a2b;
            margin-bottom: 12px;
            font-weight: 700;
            z-index: 2;
            position: relative;
        }

        .products-title .highlight {
            color: #a06a2b;
        }

        .products-subtitle {
            font-size: 48px;
            color: #fff;
            font-weight: 700;
            z-index: 2;
            position: relative;
        }

        .products-grid-section {
            padding: 40px 24px 80px 24px;
            text-align: center;
            background: #d6b89c;
        }

        .products-grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .product-card {
            background: #b9935a;
            padding: 30px;
            border-radius: 10px;
            text-align: left;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .product-name {
            font-size: 22px;
            color: #a06a2b;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .product-desc {
            font-size: 14px;
            color: #fff;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .product-price {
            font-size: 24px;
            color: #fff;
            font-weight: 700;
            margin-top: auto;
            margin-bottom: 20px;
        }

        .btn-buy {
            background: #a06a2b;
            color: #fff;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
            text-decoration: none;
            display: inline-block;
            width: 100%;
            text-align: center;
        }

        .btn-buy:hover {
            background: #8b5c1e;
        }

        @media (max-width: 900px) {
            .products-grid-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
        }

        @media (max-width: 600px) {
            .products-hero {
                padding: 40px 10px;
            }
            .products-title {
                font-size: 28px;
                margin-bottom: 10px;
            }
            .products-subtitle {
                font-size: 32px;
            }
            .products-grid-section {
                padding: 40px 10px;
            }
            .products-grid-container {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            .products-hero::before,
            .products-hero::after {
                width: 60px;
            }
            .products-hero::before {
                top: 15%;
                left: -5px;
            }
            .products-hero::after {
                top: 85%;
                right: -5px;
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
            <a href="contact.php">Contact</a>
            <a href="productspage.php">Products</a>
            <a href="blogpage.php">Blog</a>
        </div>
    </div>

    <div class="products-hero">
        <h2 class="products-title">Nikmati Produk Kami</h2>
        <h1 class="products-subtitle">Tumbuh Lestari</h1>
    </div>

    <div class="products-grid-section">
        <div class="products-grid-container">
            <?php foreach ($produk as $p): ?>
                <div class="product-card">
                    <?php if ($p['gambar']): ?>
                        <img src="uploads/<?= htmlspecialchars($p['gambar']) ?>" alt="<?= htmlspecialchars($p['nama']) ?>" class="product-image">
                    <?php endif; ?>
                    <h3 class="product-name"><?= htmlspecialchars($p['nama']) ?></h3>
                    <p class="product-desc">
                        <?= nl2br(htmlspecialchars($p['deskripsi'])) ?>
                    </p>
                    <p class="product-price">Rp. <?= number_format($p['harga'], 0, ',', '.') ?></p>
                    <button class="btn-buy" type="button">Pesan Sekarang</button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html> 