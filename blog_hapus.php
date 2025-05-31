<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
include 'koneksi.php';
$id = $_GET['id'] ?? '';
if ($id) {
    $stmt = mysqli_prepare($conn, "DELETE FROM blog WHERE id=?");
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
}
header('Location: blog.php');
exit(); 