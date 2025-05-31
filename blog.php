<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
include 'koneksi.php';
$blog = [];
$q = mysqli_query($conn, "SELECT * FROM blog ORDER BY created_at DESC");
if ($q) {
    while ($row = mysqli_fetch_assoc($q)) {
        $blog[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog - Tumbuh Lestari</title>
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
        .blog-card { border: 1px solid #eee; border-radius: 8px; background: #fff; padding: 24px; }
        .blog-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px; }
        .blog-title { font-size: 22px; font-weight: bold; }
        .blog-desc { color: #888; font-size: 14px; margin-bottom: 18px; }
        .btn-tambah { background: #ff8800; color: #fff; border: none; padding: 10px 18px; border-radius: 4px; font-size: 15px; cursor: pointer; font-weight: bold; }
        .blog-table { width: 100%; border-collapse: collapse; }
        .blog-table th, .blog-table td { padding: 12px 8px; text-align: left; }
        .blog-table th { color: #888; font-size: 15px; border-bottom: 1px solid #eee; }
        .blog-table tr:not(:last-child) td { border-bottom: 1px solid #f3f3f3; }
        .blog-action { text-align: right; }
        .btn-delete { background: #ff4444; color: #fff; border: none; border-radius: 4px; padding: 7px 12px; font-size: 16px; cursor: pointer; }
        .btn-delete:hover { background: #d00; }
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
            <a href="produk.php" class="menu-item">
                <svg width="20" height="20" fill="none" stroke="#888" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M16 3v4M8 3v4"/></svg>
                Produk
            </a>
            <a href="blog.php" class="menu-item active">
                <svg width="20" height="20" fill="none" stroke="#ff8800" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M8 3v4M16 3v4"/></svg>
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
            <div class="blog-card">
                <div class="blog-header">
                    <div>
                        <div class="blog-title">Postingan</div>
                        <div class="blog-desc">Kelola postingan blog anda</div>
                    </div>
                    <button class="btn-tambah" onclick="window.location.href='blog_tambah.php'">➕Buat Postingan</button>
                </div>
                <table class="blog-table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Dibuat pada</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($blog as $b): ?>
                        <tr>
                            <td><?= htmlspecialchars($b['judul']) ?></td>
                            <td><?= date('n/j/Y, g:i:s A', strtotime($b['created_at'])) ?></td>
                            <td class="blog-action">
                                <button class="btn-delete" onclick="hapusBlog(<?= $b['id'] ?>)">&#128465;</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
function hapusBlog(id) {
    if (confirm('Yakin ingin menghapus postingan ini?')) {
        window.location.href = 'blog_hapus.php?id=' + id;
    }
}
</script>
</body>
</html> 