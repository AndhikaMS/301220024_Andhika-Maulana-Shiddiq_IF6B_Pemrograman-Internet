<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
include 'koneksi.php';

$judul = $_POST['judul'] ?? '';
$konten = $_POST['konten'] ?? '';

if ($judul && $konten) {
    $stmt = mysqli_prepare($conn, "INSERT INTO blog (judul, konten, created_at) VALUES (?, ?, NOW())");
    mysqli_stmt_bind_param($stmt, 'ss', $judul, $konten);
    if (mysqli_stmt_execute($stmt)) {
        header('Location: blog.php');
        exit();
    } else {
        echo 'Gagal menyimpan postingan.';
    }
} else {
    echo 'Judul dan konten wajib diisi.';
} 