<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tumbuh Lestari - About Us</title>
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
        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 48px 24px;
        }
        .about-header {
            text-align: center;
            margin-bottom: 48px;
        }
        .about-title {
            font-size: 36px;
            color: #a94442;
            margin-bottom: 16px;
        }
        .about-subtitle {
            font-size: 18px;
            color: #a68a64;
            max-width: 600px;
            margin: 0 auto;
        }
        .about-content {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 48px;
            margin-bottom: 48px;
        }
        .about-section {
            background: #fff;
            padding: 32px;
            border-radius: 8px;
            box-shadow: 0 4px 16px rgba(90,70,52,0.1);
        }
        .about-section h2 {
            color: #a94442;
            margin-bottom: 16px;
        }
        .about-section p {
            color: #5a4634;
            line-height: 1.6;
            margin-bottom: 16px;
        }
        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 48px;
        }
        .value-card {
            background: #fff;
            padding: 24px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 16px rgba(90,70,52,0.1);
        }
        .value-card h3 {
            color: #a94442;
            margin-bottom: 12px;
        }
        .value-card p {
            color: #5a4634;
            font-size: 14px;
            line-height: 1.5;
        }
        @media (max-width: 900px) {
            .about-content {
                grid-template-columns: 1fr;
            }
            .values-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                padding: 16px;
            }
            .values-grid {
                grid-template-columns: 1fr;
            }
            .about-container {
                padding: 24px 16px;
            }
        }
        .about-main {
            display: flex;
            min-height: 480px;
            background: #e9ded6;
            margin: 48px auto 0 auto;
            max-width: 1200px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(90,70,52,0.08);
        }
        .about-image {
            flex: 1.1;
            min-width: 320px;
            background: #c7b299;
            display: flex;
            align-items: stretch;
            justify-content: stretch;
        }
        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .about-content-bg {
            flex: 1.5;
            background: #e9ded6 url('https://svgshare.com/i/14kA.svg'); /* motif biji kopi SVG transparan */
            background-repeat: repeat;
            background-size: 120px;
            padding: 48px 40px 40px 40px;
            display: flex;
            align-items: center;
        }
        .about-header {
            width: 100%;
        }
        .about-title {
            color: #a94442;
            font-size: 20px;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .about-headline {
            font-size: 32px;
            color: #5a4634;
            margin-bottom: 18px;
            font-weight: 700;
            line-height: 1.2;
        }
        .about-headline .highlight {
            color: #a94442;
        }
        .about-desc {
            color: #5a4634;
            font-size: 16px;
            margin-bottom: 32px;
            line-height: 1.7;
            max-width: 600px;
        }
        .about-stats {
            display: flex;
            gap: 48px;
            margin-top: 16px;
        }
        .stat {
            text-align: left;
        }
        .stat-value {
            font-size: 32px;
            color: #a94442;
            font-weight: bold;
            margin-bottom: 4px;
        }
        .stat-label {
            color: #5a4634;
            font-size: 15px;
            max-width: 180px;
        }
        @media (max-width: 900px) {
            .about-main {
                flex-direction: column;
                min-height: unset;
            }
            .about-content-bg {
                padding: 32px 16px;
            }
            .about-stats {
                gap: 24px;
            }
        }
        @media (max-width: 600px) {
            .about-main {
                border-radius: 0;
                margin: 0;
            }
            .about-content-bg {
                padding: 20px 8px;
            }
            .about-headline {
                font-size: 22px;
            }
            .stat-value {
                font-size: 22px;
            }
        }
        .hero-main-container {
            background-image: url('https://cdn.pixabay.com/photo/2017/01/13/09/23/magic-cube-1976725_1280.jpg');
            background-size: cover;
            background-position: center;
            min-height: 520px;
            display: flex;
            align-items: center;
            padding-left: 10%;
            position: relative;
            overflow: hidden;
            margin-top: -12px; /* Adjust for navbar spacing */
        }
        .hero-content-box {
            position: relative;
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem 4rem;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
            z-index: 2;
        }
        .hero-content-box h1 {
            font-size: 2.8rem;
            color: #2C3E50;
            margin-bottom: 1.5rem;
            line-height: 1.3;
            font-weight: 700;
        }
        .hero-content-box p {
            font-size: 1.1rem;
            color: #34495E;
            margin-bottom: 2rem;
            line-height: 1.8;
            max-width: 90%;
        }
        .hero-content-box .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: #E74C3C;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid #E74C3C;
            font-size: 1rem;
            margin-right: 1rem;
        }
        .hero-content-box .btn:hover {
            background: transparent;
            color: #E74C3C;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.2);
        }
        .hero-content-box .btn-outline {
            background: transparent;
            color: #E74C3C;
            border: 2px solid #E74C3C;
        }
        .hero-content-box .btn-outline:hover {
            background: #E74C3C;
            color: white;
        }
        @media (max-width: 900px) {
            .hero-content-box {
                padding: 2.5rem 3rem;
                margin: 0 2rem;
            }
            .hero-content-box h1 {
                font-size: 2.4rem;
                margin-bottom: 1.2rem;
            }
            .hero-content-box p {
                font-size: 1rem;
                margin-bottom: 1.8rem;
            }
            .hero-content-box .btn {
                padding: 0.7rem 1.8rem;
                font-size: 0.95rem;
            }
        }
        @media (max-width: 600px) {
            .hero-content-box {
                padding: 2rem;
                margin: 0 1rem;
            }
            .hero-content-box h1 {
                font-size: 2rem;
                margin-bottom: 1rem;
            }
            .hero-content-box p {
                font-size: 0.95rem;
                margin-bottom: 1.5rem;
                max-width: 100%;
            }
            .hero-content-box .btn {
                padding: 0.6rem 1.5rem;
                font-size: 0.9rem;
                margin-bottom: 0.8rem;
                display: block;
                width: fit-content;
            }
            .hero-content-box .btn:last-child {
                margin-bottom: 0;
            }
        }

        /* History Image Section Styles */
        .history-image-container {
            margin-top: 30px;
            text-align: center;
        }

        .history-company-image {
            width: 100%;
            max-width: 600px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 900px) {
            .history-image-container {
                margin-top: 20px;
            }
            .history-company-image {
                max-width: 100%;
            }
        }

        @media (max-width: 600px) {
            .history-image-container {
                margin-top: 15px;
            }
            .history-company-image {
                border-radius: 8px;
            }
        }

        /* Image Section Styles */
        .image-section {
            text-align: center;
            margin: 60px auto;
            max-width: 900px;
            padding: 0 20px;
        }

        .image-section-title {
            font-size: 2.5rem;
            color: #5a4634;
            margin-bottom: 0.8rem;
            font-weight: 700;
        }

        .image-section-subtitle {
            font-size: 1.1rem;
            color: #8D6B4F;
            margin-bottom: 2.5rem;
            line-height: 1.5;
        }

        .company-image {
            width: 100%;
            max-width: 800px;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            display: block;
            margin: 0 auto;
        }

        @media (max-width: 900px) {
            .image-section {
                margin: 40px auto;
                padding: 0 15px;
            }
            .image-section-title {
                font-size: 2rem;
            }
            .image-section-subtitle {
                font-size: 1rem;
                margin-bottom: 2rem;
            }
            .company-image {
                border-radius: 10px;
            }
        }

        @media (max-width: 600px) {
            .image-section {
                margin: 30px auto;
                padding: 0 10px;
            }
            .image-section-title {
                font-size: 1.8rem;
            }
            .image-section-subtitle {
                font-size: 0.9rem;
                margin-bottom: 1.5rem;
            }
            .company-image {
                border-radius: 8px;
            }
        }

        /* Team Section Styles */
        .team-section {
            padding: 80px 24px;
            text-align: center;
            background: #e9ded6;
            position: relative;
            overflow: hidden;
        }

        .team-section::before {
            content: url('https://svgshare.com/i/14k7.svg'); /* left coffee bean */
            position: absolute;
            left: 5%;
            top: 50%;
            transform: translateY(-50%) rotate(0deg);
            opacity: 0.7;
            width: 100px;
            height: auto;
            pointer-events: none;
            z-index: 1;
        }

        .team-section::after {
            content: url('https://svgshare.com/i/14k7.svg'); /* right coffee bean */
            position: absolute;
            right: 5%;
            top: 20%;
            transform: translateY(-50%) rotate(45deg);
            opacity: 0.7;
            width: 100px;
            height: auto;
            pointer-events: none;
            z-index: 1;
        }

        .team-title {
            font-size: 38px;
            color: #5a4634;
            margin-bottom: 24px;
            font-weight: 700;
            z-index: 2;
            position: relative;
        }

        .team-highlight {
            color: #a94442;
        }

        .team-members {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            margin-top: 60px;
            z-index: 2;
            position: relative;
        }

        .team-member-card {
            background: #e9ded6;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 280px;
            box-shadow: none; /* remove box shadow */
            position: relative;
            z-index: 2;
        }

        .member-photo {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background-color: #c7b299; /* Placeholder background */
            margin: 0 auto 20px auto;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 5px solid rgba(255, 255, 255, 0.5); /* Semi-transparent white border */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .member-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .member-name {
            font-size: 24px;
            font-weight: 700;
            color: #5a4634;
            margin-bottom: 8px;
        }

        .member-position {
            font-size: 16px;
            color: #a68a64;
        }

        @media (max-width: 900px) {
            .team-section {
                padding: 60px 16px;
            }
            .team-title {
                font-size: 32px;
            }
            .team-members {
                gap: 30px;
            }
            .team-member-card {
                width: 250px;
            }
            .member-photo {
                width: 160px;
                height: 160px;
            }
        }

        @media (max-width: 600px) {
            .team-section {
                padding: 40px 10px;
            }
            .team-title {
                font-size: 28px;
                margin-bottom: 16px;
            }
            .team-members {
                flex-direction: column;
                align-items: center;
                margin-top: 40px;
            }
            .team-member-card {
                width: 80%;
                max-width: 300px;
            }
            .member-photo {
                width: 150px;
                height: 150px;
            }
            .team-section::before,
            .team-section::after {
                width: 70px; /* Smaller coffee bean images on mobile */
            }
            .team-section::before {
                top: 10%;
                left: -10px;
            }
            .team-section::after {
                top: 80%;
                right: -10px;
            }
        }
        /* End Team Section Styles */
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo"><span>TL</span> Tumbuh Lestari</div>
        <div class="nav-menu">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="productspage.php">Products</a>
            <a href="blogpage.php">Blog</a>
        </div>
    </div>

    <div class="hero-main-container">
        <div class="hero-content-box">
            <div class="flower-icon"></div>
            <div class="logo-small"><span>TL</span> Tumbuh Lestari</div>
            <h1>Tumbuh Lestari</h1>
            <p class="description">Bergabunglah dengan kami dalam perjalanan ini dan rasakan keajaiban setiap cangkir kopi Tumbuh Lestari.</p>
            <button class="btn-explore" onclick="window.location.href='#'">Explore</button>
        </div>
    </div>

    <div class="about-main">
        <div class="about-image">
            <img src="https://via.placeholder.com/600x400/C7B299/FFFFFF?text=About+Us+Image" alt="Tumbuh Lestari Coffee Beans">
        </div>
        <div class="about-content-bg">
            <div class="about-header">
                <p class="about-title">Sejarah Perusahaan</p>
                <h1 class="about-headline">Berkembang Bersama, Menghadirkan Kualitas <span class="highlight">Kopi Terbaik</span></h1>
                <p class="about-desc">
                    Tumbuh Lestari dimulai sebagai Kedai Dialog Kopi pada tahun 2018, fokus di F&B di Cibodas. Kami kemudian berpindah lokasi dan berganti nama menjadi Halawa Kopi hingga awal 2020. Pandemi menyebabkan usaha kami tutup sementara.
                </p>
                <p class="about-desc">
                    Dengan memanfaatkan koneksi dan keterampilan dari Halawa Kopi, kami memulai Tumbuh Lestari, mengolah kopi dari kebun di Sukarame. Kami bekerja sama dengan petani, gudang kopi di Cibodas, dan mulai menanam biji kopi di Curug Roda.
                </p>
                <p class="about-desc">
                    Setahun kemudian, kami berhasil mengelola panen pertama kami, dari penanaman hingga penjualan. Kami juga sempat menjual kopi susu kemasan, namun keterbatasan hasil panen menghentikan usaha ini. Kami kembali bekerja sama dengan petani dan gudang di Cibodas untuk memastikan pasokan kopi.
                </p>
                <p class="about-desc">
                    Penjualan kami berkembang dari mulut ke mulut dan sistem pre-order, hingga akhir 2022 kami mulai menggarap marketplace online.
                </p>
                <div class="history-image-container">
                    <img src="https://cdn.pixabay.com/photo/2017/01/13/09/23/magic-cube-1976725_1280.jpg" alt="Coffee Farm History" class="history-company-image">
                </div>
            </div>
        </div>
    </div>

    <div class="image-section">
        <h2 class="image-section-title">Kebun Kami</h2>
        <p class="image-section-subtitle">Segar dan Alami, Langsung Dari Kebun Kami</p>
        <img src="https://cdn.pixabay.com/photo/2017/01/13/09/23/magic-cube-1976725_1280.jpg" alt="Kebun Kopi Kami" class="company-image">
    </div>

    <div class="team-section">
        <h2 class="team-title">Kebersamaan dalam <span class="team-highlight">Keberhasilan</span></h2>
        <div class="team-members">
            <div class="team-member-card">
                <div class="member-photo">
                    <!-- Photo for Afrizal Ahmad Rasyidin -->
                </div>
                <h3 class="member-name">Afrizal Ahmad Rasyidin</h3>
                <p class="member-position">Head & Quality Control</p>
            </div>
            <div class="team-member-card">
                <div class="member-photo">
                    <!-- Photo for Fridka Ramadhan Sundara -->
                </div>
                <h3 class="member-name">Fridka Ramadhan Sundara</h3>
                <p class="member-position">Social Media Manager</p>
            </div>
            <div class="team-member-card">
                <div class="member-photo">
                    <!-- Photo for Adi Setiadi -->
                </div>
                <h3 class="member-name">Adi Setiadi</h3>
                <p class="member-position">Field Management</p>
            </div>
        </div>
    </div>

    <div class="values-grid">
        <!-- Existing values-grid content -->
    </div>

</body>
</html> 