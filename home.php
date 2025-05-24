<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home Admin</title>
    <style>
        body { background: #fafafa; font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: 40px auto; background: #fff; border: 1px solid #eee; border-radius: 6px; padding: 24px; text-align: center; }
        h2 { margin-bottom: 4px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Home Admin</h2>
        <p>Selamat datang di halaman admin.</p>
        <form method="post" action="logout.php" style="margin-top:24px;">
            <button type="submit" class="btn" style="background:#ff8800;color:#fff;padding:10px 24px;border:none;border-radius:4px;font-size:16px;cursor:pointer;">Logout</button>
        </form>
    </div>
</body>
</html> 