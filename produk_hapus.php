<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
include 'koneksi.php';
$id = $_GET['id'] ?? '';
if ($id) {
    // Ambil nama file gambar
    $q = mysqli_query($conn, "SELECT gambar FROM produk WHERE id=".intval($id));
    $data = mysqli_fetch_assoc($q);
    if ($data && $data['gambar']) {
        $file = 'uploads/' . $data['gambar'];
        if (file_exists($file)) unlink($file);
    }
    $stmt = mysqli_prepare($conn, "DELETE FROM produk WHERE id=?");
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
}
header('Location: produk.php');
exit(); 