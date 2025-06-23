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
        .blog-hero {
            text-align: center;
            padding: 60px 24px 30px 24px;
        }
        .blog-hero-title {
            font-size: 38px;
            color: #a68a64;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .blog-hero-subtitle {
            font-size: 48px;
            color: #fff;
            font-weight: 700;
            margin-bottom: 0;
            text-shadow: 0 2px 8px #a68a64;
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
            background: #d4c1a5;
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
            color: #a94442;
            margin-bottom: 10px;
        }
        .blog-excerpt {
            font-size: 15px;
            color: #5a4634;
            margin-bottom: 16px;
            min-height: 60px;
        }
        .blog-meta {
            font-size: 13px;
            color: #7a6a4f;
            margin-bottom: 8px;
        }
        .blog-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn-readmore {
            background: #a68a64;
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
            background: #a94442;
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
                        <a href="blog_detail.php?id=<?= $b['id'] ?>" class="btn-readmore">Lihat Selengkapnya</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html> 