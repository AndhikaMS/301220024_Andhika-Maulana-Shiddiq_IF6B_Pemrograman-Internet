<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
include 'koneksi.php';

// Validasi input
$nama = $_POST['nama'] ?? '';
$harga = $_POST['harga'] ?? '';
$link_shopee = $_POST['link_shopee'] ?? '';
$deskripsi = $_POST['deskripsi'] ?? '';
$gambar = '';

// Handle upload gambar
if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    $ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
    $newName = 'produk_' . time() . '_' . rand(1000,9999) . '.' . $ext;
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir);
    $uploadPath = $uploadDir . $newName;
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadPath)) {
        $gambar = $newName;
    } else {
        die('Gagal upload gambar');
    }
}

if ($nama && $harga) {
    $stmt = mysqli_prepare($conn, "INSERT INTO produk (nama, harga, link_shopee, deskripsi, gambar, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
    mysqli_stmt_bind_param($stmt, 'sisss', $nama, $harga, $link_shopee, $deskripsi, $gambar);
    if (mysqli_stmt_execute($stmt)) {
        header('Location: produk.php');
        exit();
    } else {
        echo 'Gagal menyimpan produk.';
    }
} else {
    echo 'Nama dan harga wajib diisi.';
} 