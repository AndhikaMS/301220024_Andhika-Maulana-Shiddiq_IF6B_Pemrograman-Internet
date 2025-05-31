<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
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
    <title>Produk - Tumbuh Lestari</title>
    <style>
        body { margin:0; background: #fafafa; font-family: Arial, sans-serif; }
        .layout { display: flex; min-height: 100vh; }
        .sidebar { width: 220px; background: #fff; border-right: 1px solid #eee; display: flex; flex-direction: column; }
        .logo { font-weight: bold; font-size: 20px; color: #a94442; letter-spacing: 1px; padding: 24px 24px 12px 24px; display: flex; align-items: center; }
        .logo span { font-family: serif; font-size: 28px; margin-right: 8px; color: #a94442; }
        .menu { flex: 1; }
        .menu-item { display: flex; align-items: center; padding: 12px 24px; color: #888; background: #fff; border-left: 4px solid transparent; font-weight: bold; text-decoration: none; }
        .menu-item.active { color:#ff8800; background:#fff7f0; border-left:4px solid #ff8800; }
        .menu-item svg { margin-right: 10px; }
        .header { height: 56px; background: #fff; border-bottom: 1px solid #eee; display: flex; align-items: center; justify-content: flex-end; padding: 0 32px; }
        .profile { width: 32px; height: 32px; border-radius: 50%; background: #f3f3f3; display: flex; align-items: center; justify-content: center; font-size: 18px; color: #888; }
        .content { flex: 1; padding: 32px; }
        .produk-card { border: 1px solid #eee; border-radius: 8px; background: #fff; padding: 24px; }
        .produk-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px; }
        .produk-title { font-size: 22px; font-weight: bold; }
        .produk-desc { color: #888; font-size: 14px; margin-bottom: 18px; }
        .btn-tambah { background: #ff8800; color: #fff; border: none; padding: 10px 18px; border-radius: 4px; font-size: 15px; cursor: pointer; font-weight: bold; }
        .produk-table { width: 100%; border-collapse: collapse; }
        .produk-table th, .produk-table td { padding: 12px 8px; text-align: left; }
        .produk-table th { color: #888; font-size: 15px; border-bottom: 1px solid #eee; }
        .produk-table tr:not(:last-child) td { border-bottom: 1px solid #f3f3f3; }
        .produk-img { width: 48px; height: 48px; object-fit: cover; border-radius: 6px; border: 1px solid #eee; }
        .produk-nama { font-weight: bold; font-size: 16px; }
        .produk-harga { color: #a94442; font-weight: bold; }
        .produk-date { color: #888; font-size: 13px; }
        .produk-row { display: flex; align-items: center; gap: 12px; }
        .produk-action { text-align: right; }
        .produk-dot { font-size: 22px; color: #bbb; cursor: pointer; }
    </style>
</head>
<body>
<div class="layout">
    <div class="sidebar">
        <div class="logo"><span>TL</span> Tumbuh Lestari</div>
        <div class="menu">
            <a href="home.php" class="menu-item">
                <svg width="20" height="20" fill="none" stroke="#888" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6"/></svg>
                Home
            </a>
            <a href="produk.php" class="menu-item active">
                <svg width="20" height="20" fill="none" stroke="#ff8800" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M16 3v4M8 3v4"/></svg>
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
            <div class="produk-card">
                <div class="produk-header">
                    <div>
                        <div class="produk-title">Produk</div>
                        <div class="produk-desc">Kelola product anda</div>
                    </div>
                    <button class="btn-tambah" onclick="window.location.href='produk_tambah.php'">➕Tambah Product</button>
                </div>
                <table class="produk-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Dibuat pada</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($produk as $p): ?>
                        <tr>
                            <td><img src="https://via.placeholder.com/48x48?text=IMG" class="produk-img" alt="img"></td>
                            <td class="produk-nama"><?= htmlspecialchars($p['nama']) ?></td>
                            <td class="produk-harga">Rp.<br><?= number_format($p['harga'],0,',','.') ?></td>
                            <td class="produk-date"><?= date('n/j/Y, g:i:s A', strtotime($p['created_at'])) ?></td>
                            <td class="produk-action"><span class="produk-dot">...</span></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html> 