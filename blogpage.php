<?php
include 'koneksi.php';

// Ambil data blog
$blog = [];
$q = mysqli_query($conn, "SELECT * FROM blog ORDER BY created_at DESC");
if ($q) {
    while ($row = mysqli_fetch_assoc($q)) {
        $blog[] = $row;
    }
}
function excerpt($text, $max=120) {
    $text = strip_tags($text);
    if (strlen($text) <= $max) return $text;
    $cut = substr($text, 0, $max);
    if (substr($cut, -1) !== ' ') $cut = substr($cut, 0, strrpos($cut, ' '));
    return $cut . '...';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Tumbuh Lestari</title>
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
        .blog-hero {
            text-align: center;
            padding: 60px 24px 30px 24px;
        }
        .blog-hero-title {
            font-size: 38px;
            color: #a06a2b;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .blog-hero-subtitle {
            font-size: 48px;
            color: #fff;
            font-weight: 700;
            margin-bottom: 0;
            text-shadow: 0 2px 8px #a06a2b;
        }
        .blog-list-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 24px 60px 24px;
        }
        .blog-list-container {
            display: flex;
            gap: 32px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .blog-card {
            background: #b9935a;
            border: 1px solid #bfa77a;
            border-radius: 10px;
            width: 340px;
            display: flex;
            flex-direction: column;
            padding: 18px 18px 16px 18px;
            margin-bottom: 24px;
        }
        .blog-title {
            font-size: 20px;
            font-weight: 700;
            color: #a06a2b;
            margin-bottom: 10px;
        }
        .blog-excerpt {
            font-size: 15px;
            color: #fff;
            margin-bottom: 16px;
            min-height: 60px;
        }
        .blog-meta {
            font-size: 13px;
            color: #fff;
            margin-bottom: 8px;
        }
        .blog-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn-readmore {
            background: #a06a2b;
            color: #fff;
            border: none;
            padding: 8px 18px;
            border-radius: 4px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.2s;
        }
        .btn-readmore:hover {
            background: #8b5c1e;
        }
        @media (max-width: 900px) {
            .blog-list-container {
                gap: 18px;
            }
            .blog-card {
                width: 90%;
                min-width: 260px;
            }
        }
        @media (max-width: 600px) {
            .blog-list-section {
                padding: 20px 6px 40px 6px;
            }
            .blog-list-container {
                flex-direction: column;
                gap: 16px;
            }
            .blog-card {
                width: 100%;
                min-width: unset;
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

    <div class="blog-hero">
        <div class="blog-hero-title">Terus Update Berita Terbaru</div>
        <div class="blog-hero-subtitle">Tumbuh Lestari</div>
    </div>

    <div class="blog-list-section">
        <div class="blog-list-container">
            <?php foreach ($blog as $b): ?>
                <div class="blog-card">
                    <div class="blog-title"><?= htmlspecialchars($b['judul']) ?></div>
                    <div class="blog-excerpt"><?= htmlspecialchars(excerpt($b['konten'])) ?></div>
                    <div class="blog-footer">
                        <div class="blog-meta">oleh Admin<br><?= strftime('%A, %d %B %Y', strtotime($b['created_at'])) ?></div>
                        <button type="button" class="btn-readmore">Lihat Selengkapnya</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html> 