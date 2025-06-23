<?php
include 'koneksi.php';
$id = $_GET['id'] ?? '';
if (!$id) die('ID blog tidak ditemukan');
$q = mysqli_query($conn, "SELECT * FROM blog WHERE id=".intval($id));
$data = mysqli_fetch_assoc($q);
if (!$data) die('Blog tidak ditemukan');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($data['judul']) ?> - Blog Tumbuh Lestari</title>
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
        .blog-detail-container {
            max-width: 800px;
            margin: 40px auto 0 auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(90,70,52,0.08);
            padding: 40px 32px 32px 32px;
        }
        .blog-detail-title {
            font-size: 32px;
            font-weight: 700;
            color: #a94442;
            margin-bottom: 10px;
        }
        .blog-detail-meta {
            font-size: 15px;
            color: #7a6a4f;
            margin-bottom: 24px;
        }
        .blog-detail-content {
            font-size: 18px;
            color: #5a4634;
            line-height: 1.7;
            white-space: pre-line;
        }
        .btn-back {
            display: inline-block;
            margin-top: 32px;
            background: #a68a64;
            color: #fff;
            border: none;
            padding: 10px 24px;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.2s;
        }
        .btn-back:hover {
            background: #a94442;
        }
        @media (max-width: 600px) {
            .blog-detail-container {
                padding: 18px 6px 18px 6px;
            }
            .blog-detail-title {
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
            <a href="contact.php">Contact</a>
            <a href="productspage.php">Products</a>
            <a href="blogpage.php">Blog</a>
        </div>
    </div>
    <div class="blog-detail-container">
        <div class="blog-detail-title"><?= htmlspecialchars($data['judul']) ?></div>
        <div class="blog-detail-meta">oleh Admin | <?= strftime('%A, %d %B %Y', strtotime($data['created_at'])) ?></div>
        <div class="blog-detail-content"><?= nl2br(htmlspecialchars($data['konten'])) ?></div>
        <a href="blogpage.php" class="btn-back">&larr; Kembali ke Blog</a>
    </div>
</body>
</html> 