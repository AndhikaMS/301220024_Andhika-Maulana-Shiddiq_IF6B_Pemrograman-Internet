<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tumbuh Lestari - Landing Page</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', Arial, sans-serif;
            background: #e9ded6;
            color: #5a4634;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px 48px 12px 48px;
            background: transparent;
        }
        .logo {
            font-weight: bold;
            font-size: 22px;
            color: #a94442;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
        }
        .logo span {
            font-family: serif;
            font-size: 32px;
            margin-right: 8px;
            color: #a94442;
        }
        .nav-menu {
            display: flex;
            gap: 32px;
        }
        .nav-menu a {
            text-decoration: none;
            color: #5a4634;
            font-weight: 500;
            font-size: 16px;
            transition: color 0.2s;
        }
        .nav-menu a:hover {
            color: #ff8800;
        }
        .main {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 48px 64px 0 64px;
            min-height: 420px;
        }
        .main-text {
            max-width: 480px;
        }
        .main-title {
            font-size: 44px;
            font-weight: 700;
            color: #a68a64;
            margin-bottom: 8px;
        }
        .main-title span {
            color: #fff;
        }
        .main-desc {
            font-size: 16px;
            color: #a68a64;
            margin-bottom: 24px;
        }
        .btn-explore {
            background: #a94442;
            color: #fff;
            border: none;
            padding: 12px 32px;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn-explore:hover {
            background: #ff8800;
        }
        .main-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .main-image img {
            width: 320px;
            max-width: 100%;
            filter: drop-shadow(0 8px 32px rgba(90,70,52,0.18));
        }
        .info-bar {
            display: flex;
            justify-content: center;
            gap: 48px;
            margin: 32px 0 0 0;
            font-size: 16px;
            color: #a68a64;
        }
        .info-bar strong {
            color: #a94442;
            font-weight: bold;
        }
        @media (max-width: 900px) {
            .main { flex-direction: column; padding: 32px 16px 0 16px; }
            .main-image { margin-top: 32px; }
        }
        @media (max-width: 600px) {
            .navbar { flex-direction: column; padding: 16px; }
            .main { padding: 16px; }
            .main-title { font-size: 32px; }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo"><span>TL</span> Tumbuh Lestari</div>
        <div class="nav-menu">
            <a href="#">Home</a>
            <a href="about.php">About</a>
            <a href="#contact">Contact</a>
            <a href="#products">Products</a>
            <a href="#blog">Blog</a>
        </div>
    </div>
    <div class="main">
        <div class="main-text">
            <div class="main-title"><span>Tumbuh</span> Lestari</div>
            <div class="main-desc">Menyiup Keharmonisan Lingkungan dan Kenikmatan Rasa</div>
            <button class="btn-explore" onclick="window.location.href='login.php'">Explore</button>
        </div>
        <div class="main-image">
            <img src="https://img.freepik.com/free-vector/coffee-cup-coffee-beans_1284-42107.jpg?w=826&t=st=1718000000~exp=1718000600~hmac=placeholder" alt="Coffee Illustration">
        </div>
    </div>
    <div class="info-bar">
        <div>Roast Fresh <br><strong>98% Fresh</strong></div>
        <div>Bean Inventory <br><strong>1,234kg</strong></div>
    </div>
</body>
</html> 