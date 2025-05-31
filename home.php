<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
include 'koneksi.php';

// Ambil jumlah produk dan blog
$db_produk = 0;
$db_blog = 0;
$produk_q = mysqli_query($conn, "SELECT COUNT(*) as total FROM produk");
if ($produk_q) {
    $produk_row = mysqli_fetch_assoc($produk_q);
    $db_produk = $produk_row['total'] ?? 0;
}
$blog_q = mysqli_query($conn, "SELECT COUNT(*) as total FROM blog");
if ($blog_q) {
    $blog_row = mysqli_fetch_assoc($blog_q);
    $db_blog = $blog_row['total'] ?? 0;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <style>
        body { margin:0; background: #fafafa; font-family: Arial, sans-serif; }
        .layout { display: flex; min-height: 100vh; }
        .sidebar { width: 220px; background: #fff; border-right: 1px solid #eee; display: flex; flex-direction: column; }
        .logo { font-weight: bold; font-size: 20px; color: #a94442; letter-spacing: 1px; padding: 24px 24px 12px 24px; display: flex; align-items: center; }
        .logo span { font-family: serif; font-size: 28px; margin-right: 8px; color: #a94442; }
        .menu { flex: 1; }
        .menu-item { display: flex; align-items: center; padding: 12px 24px; color: #888; background: #fff; border-left: 4px solid transparent; font-weight: bold; text-decoration: none; transition: background 0.2s, color 0.2s; }
        .menu-item.active { color:#ff8800; background:#fff7f0; border-left:4px solid #ff8800; }
        .menu-item svg { margin-right: 10px; stroke: #888; transition: stroke 0.2s; }
        .menu-item.active svg { stroke: #ff8800; }
        .header { height: 56px; background: #fff; border-bottom: 1px solid #eee; display: flex; align-items: center; justify-content: flex-end; padding: 0 32px; }
        .profile { width: 32px; height: 32px; border-radius: 50%; background: #f3f3f3; display: flex; align-items: center; justify-content: center; font-size: 18px; color: #888; }
        .content { flex: 1; padding: 32px; }
        .dashboard { display: flex; gap: 24px; }
        .card { flex: 1; border: 1px solid #eee; border-radius: 8px; padding: 32px 24px; background: #fff; text-align: left; }
        .card-title { font-size: 18px; color: #888; margin-bottom: 8px; display: flex; align-items: center; }
        .card-title svg { margin-right: 8px; }
        .card-value { font-size: 36px; font-weight: bold; color: #ff8800; }
        .card-desc { color: #888; font-size: 14px; margin-top: 8px; }
        .btn-logout { margin-top: 32px; background:#ff8800;color:#fff;padding:10px 24px;border:none;border-radius:4px;font-size:16px;cursor:pointer; }
    </style>
</head>
<body>
<div class="layout">
    <div class="sidebar">
        <div class="logo"><span>TL</span> Tumbuh Lestari</div>
        <div class="menu">
            <a href="home.php" class="menu-item active">
                <svg width="20" height="20" fill="none" stroke="#ff8800" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6"/></svg>
                Home
            </a>
            <a href="produk.php" class="menu-item">
                <svg width="20" height="20" fill="none" stroke="#888" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M16 3v4M8 3v4"/></svg>
                Produk
            </a>
            <a href="#" class="menu-item">
                <svg width="20" height="20" fill="none" stroke="#888" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M8 3v4M16 3v4"/></svg>
                Blog
            </a>
        </div>
    </div>
    <div style="flex:1;display:flex;flex-direction:column;">
        <div class="header">
            <div class="profile">
                <svg width="20" height="20" fill="none" stroke="#888" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M6 20c0-2.2 3.6-3.5 6-3.5s6 1.3 6 3.5"/></svg>
            </div>
        </div>
        <div class="content">
            <div class="dashboard">
                <div class="card">
                    <div class="card-title">
                        <svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M16 3v4M8 3v4"/></svg>
                        Produk
                    </div>
                    <div class="card-value"><?php echo $db_produk ?></div>
                    <div class="card-desc">Total produk yang telah ditambahkan</div>
                </div>
                <div class="card">
                    <div class="card-title">
                        <svg width="18" height="18" fill="none" stroke="#888" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M8 3v4M16 3v4"/></svg>
                        Blog
                    </div>
                    <div class="card-value"><?php echo $db_blog ?></div>
                    <div class="card-desc">Total postingan blog yang telah dibuat</div>
                </div>
            </div>
            <form method="post" action="logout.php">
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        </div>
    </div>
</div>
</body>
</html> 