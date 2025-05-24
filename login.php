<?php
session_start();
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['user'] = $username;
        header('Location: home.php');
        exit();
    } else {
        $error = 'Username atau password salah!';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { background: #fafafa; font-family: Arial, sans-serif; }
        .container { max-width: 350px; margin: 40px auto; background: #fff; border: 1px solid #eee; border-radius: 6px; padding: 24px; }
        h2 { margin-bottom: 4px; }
        .desc { color: #888; font-size: 14px; margin-bottom: 18px; }
        label { font-weight: bold; display: block; margin-bottom: 4px; }
        input[type=text], input[type=password] { width: 100%; padding: 8px; margin-bottom: 16px; border: 1px solid #ddd; border-radius: 4px; }
        .btn { width: 100%; background: #ff8800; color: #fff; border: none; padding: 10px; border-radius: 4px; font-size: 16px; cursor: pointer; }
        .btn:hover { background: #ff9900; }
        .error { color: #d00; margin-bottom: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <div class="desc">Masukkan username dan password untuk login</div>
        <?php if ($error): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="post">
            <label>Username</label>
            <input type="text" name="username" placeholder="username" required autofocus>
            <label>Password</label>
            <input type="password" name="password" placeholder="********" required>
            <button class="btn" type="submit">Sign in</button>
        </form>
    </div>
</body>
</html> 