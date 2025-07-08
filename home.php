<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tumbuh Lestari</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
    <style>
        body {
            background: #d6b89c;
            font-family: 'Montserrat', Arial, sans-serif;
            margin: 0;
            color: #a06a2b;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 32px 48px 0 48px;
        }
        .logo {
            font-size: 2.2rem;
            font-weight: bold;
            color: #a06a2b;
            letter-spacing: 2px;
            font-family: serif;
        }
        .logo span {
            color: #a06a2b;
            font-family: serif;
            font-size: 2.5rem;
            font-weight: bold;
            margin-right: 8px;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-left: 32px;
            font-size: 1.1rem;
            font-weight: 500;
            transition: color 0.2s;
            position: relative;
        }
        .navbar a.active, .navbar a:hover {
            color: #a06a2b;
        }
        .navbar a.active::after, .navbar a:hover::after {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background: #a06a2b;
            position: absolute;
            left: 0;
            bottom: -4px;
        }
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 64px 48px 0 48px;
        }
        .hero-text {
            max-width: 50%;
        }
        .hero-title {
            font-size: 4rem;
            font-weight: 700;
            color: #a06a2b;
            letter-spacing: 1px;
        }
        .hero-title span {
            color: #fff;
        }
        .hero-subtitle {
            font-size: 1.3rem;
            color: #fff;
            margin: 16px 0 0 0;
            font-weight: 400;
        }
        .hero-desc {
            color: #a06a2b;
            font-size: 1.1rem;
            margin-bottom: 32px;
        }
        .hero-btn {
            background: #a06a2b;
            color: #fff;
            border: none;
            padding: 14px 36px;
            font-size: 1.1rem;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.2s;
            margin-top: 32px;
        }
        .hero-btn:hover {
            background: #8b5c1e;
        }
        .hero-img img {
            width: 400px;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.12);
        }
        .stats {
            display: flex;
            gap: 48px;
            margin: 48px 0 0 0;
            font-size: 1.2rem;
        }
        .stats .stat-label {
            color: #a06a2b;
            font-weight: 500;
        }
        .stats .stat-value {
            color: #fff;
            font-size: 1.3rem;
            font-weight: 700;
            margin-left: 8px;
        }
        @media (max-width: 900px) {
            .hero { flex-direction: column; padding: 32px 12px 0 12px; }
            .hero-text { max-width: 100%; text-align: center; }
            .hero-img img { width: 90vw; max-width: 350px; margin-top: 32px; }
            .stats { justify-content: center; margin-left: 0; }
            .header { flex-direction: column; gap: 16px; padding: 24px 12px 0 12px; }
        }
    </style>
</head>
<body>
<div class="header">
  <div class="logo"><span>TL</span> Tumbuh Lestari</div>
  <div class="navbar">
    <a href="#" class="active">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
    <a href="#">Products</a>
    <a href="#">Blog</a>
  </div>
</div>
<div class="hero">
  <div class="hero-text">
    <div class="hero-title">Tumbuh <span>Lestari</span></div>
    <div class="hero-subtitle">Menyulam Keharmonisan Lingkungan dan Kenikmatan Rasa</div>
    <button class="hero-btn">Explore</button>
    <div class="stats">
      <div><span class="stat-label">Roast Fresh</span> <span class="stat-value">98% Fresh</span></div>
      <div><span class="stat-label">Bean Inventory</span> <span class="stat-value">1,234kg</span></div>
    </div>
  </div>
  <div class="hero-img">
    <img src="https://cdn.pixabay.com/photo/2017/02/27/16/29/coffee-beans-2103613_1280.jpg" alt="Coffee Beans">
  </div>
</div>
</body>
</html> 