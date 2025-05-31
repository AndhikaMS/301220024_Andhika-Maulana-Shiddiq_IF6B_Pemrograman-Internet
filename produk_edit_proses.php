<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
include 'koneksi.php';
$id = $_GET['id'] ?? '';
if (!$id) die('ID produk tidak ditemukan');

// Ambil data lama
$q = mysqli_query($conn, "SELECT * FROM produk WHERE id=".intval($id));
$data = mysqli_fetch_assoc($q);
if (!$data) die('Produk tidak ditemukan');

$nama = $_POST['nama'] ?? '';
$harga = $_POST['harga'] ?? '';
$link_shopee = $_POST['link_shopee'] ?? '';
$deskripsi = $_POST['deskripsi'] ?? '';
$gambar = $data['gambar'];

// Handle upload gambar baru
if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    $ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
    $newName = 'produk_' . time() . '_' . rand(1000,9999) . '.' . $ext;
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir);
    $uploadPath = $uploadDir . $newName;
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadPath)) {
        // Hapus gambar lama jika ada
        if ($gambar && file_exists($uploadDir.$gambar)) unlink($uploadDir.$gambar);
        $gambar = $newName;
    } else {
        die('Gagal upload gambar');
    }
}

if ($nama && $harga) {
    $stmt = mysqli_prepare($conn, "UPDATE produk SET nama=?, harga=?, link_shopee=?, deskripsi=?, gambar=? WHERE id=?");
    mysqli_stmt_bind_param($stmt, 'sisssi', $nama, $harga, $link_shopee, $deskripsi, $gambar, $id);
    if (mysqli_stmt_execute($stmt)) {
        header('Location: produk.php');
        exit();
    } else {
        echo 'Gagal update produk.';
    }
} else {
    echo 'Nama dan harga wajib diisi.';
} 