<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
include 'koneksi.php';
$id = $_GET['id'] ?? '';
if (!$id) die('ID produk tidak ditemukan');
$q = mysqli_query($conn, "SELECT * FROM produk WHERE id=".intval($id));
$data = mysqli_fetch_assoc($q);
if (!$data) die('Produk tidak ditemukan');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk - Tumbuh Lestari</title>
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
        .form-card { border: 1px solid #eee; border-radius: 8px; background: #fff; padding: 32px 32px 24px 32px; max-width: 700px; margin: 0 auto; }
        .form-header { display: flex; align-items: center; gap: 12px; margin-bottom: 24px; }
        .form-title { font-size: 22px; font-weight: bold; }
        .form-desc { color: #888; font-size: 14px; margin-bottom: 18px; }
        .form-group { margin-bottom: 18px; }
        .form-label { font-weight: bold; margin-bottom: 6px; display: block; }
        .form-input, .form-textarea { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 15px; }
        .form-textarea { min-height: 70px; resize: vertical; }
        .form-actions { display: flex; justify-content: flex-end; gap: 10px; margin-top: 18px; }
        .btn { background: #ff8800; color: #fff; border: none; padding: 10px 22px; border-radius: 4px; font-size: 15px; font-weight: bold; cursor: pointer; }
        .btn-cancel { background: #eee; color: #888; border: none; }
        .img-preview { margin-bottom: 10px; }
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
            <a href="blog.php" class="menu-item">
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
            <form class="form-card" method="post" action="produk_edit_proses.php?id=<?= $data['id'] ?>" enctype="multipart/form-data">
                <div class="form-header">
                    <a href="produk.php" style="text-decoration:none;color:#888;font-size:22px;">&#8592;</a>
                    <div class="form-title">Edit Produk</div>
                </div>
                <div class="form-desc">Tambahkan detail dan gambar produk</div>
                <div class="form-group">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-input" value="<?= htmlspecialchars($data['nama']) ?>" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-input" value="<?= htmlspecialchars($data['harga']) ?>" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Link Shopee</label>
                    <input type="url" name="link_shopee" class="form-input" value="<?= htmlspecialchars($data['link_shopee']) ?>">
                </div>
                <div class="form-group">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-textarea"><?= htmlspecialchars($data['deskripsi']) ?></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Gambar</label>
                    <?php if ($data['gambar']): ?>
                        <div class="img-preview"><img src="uploads/<?= htmlspecialchars($data['gambar']) ?>" alt="img" style="max-width:120px;max-height:120px;border-radius:6px;"></div>
                    <?php endif; ?>
                    <input type="file" name="gambar" class="form-input" accept="image/*">
                    <div style="color:#888;font-size:13px;">Kosongkan jika tidak ingin mengganti gambar</div>
                </div>
                <div class="form-actions">
                    <a href="produk.php" class="btn btn-cancel">Batal</a>
                    <button type="submit" class="btn">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html> 