<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tumbuh Lestari - Contact Us</title>
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

        /* Contact Page Specific Styles */
        .contact-hero {
            background: #e9ded6;
            padding: 80px 24px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .contact-hero::before {
            content: url('https://svgshare.com/i/14k7.svg'); /* Left coffee bean */
            position: absolute;
            left: 10%;
            top: 30%;
            transform: translateY(-50%) rotate(0deg);
            opacity: 0.7;
            width: 80px;
            height: auto;
            pointer-events: none;
            z-index: 1;
        }

        .contact-hero::after {
            content: url('https://svgshare.com/i/14kA.svg'); /* Right coffee bean with leaf */
            position: absolute;
            right: 10%;
            top: 70%;
            transform: translateY(-50%) rotate(90deg);
            opacity: 0.7;
            width: 80px;
            height: auto;
            pointer-events: none;
            z-index: 1;
        }

        .contact-title {
            font-size: 38px;
            color: #5a4634;
            margin-bottom: 12px;
            font-weight: 700;
            z-index: 2;
            position: relative;
        }

        .contact-title .highlight {
            color: #a94442;
        }

        .contact-subtitle {
            font-size: 48px;
            color: #a94442;
            font-weight: 700;
            z-index: 2;
            position: relative;
        }

        .contact-info-section {
            padding: 40px 24px 80px 24px;
            text-align: center;
            background: #e9ded6;
        }

        .info-section-title {
            font-size: 28px;
            color: #5a4634;
            margin-bottom: 40px;
            font-weight: 700;
        }

        .contact-cards-container {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 0 auto;
        }

        .contact-card {
            background: #d4c1a5;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            width: 380px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .contact-icon-wrapper {
            background-color: #a68a64;
            border-radius: 50%;
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
        }

        .contact-icon-wrapper img {
            width: 60px;
            height: 60px;
        }

        .contact-detail {
            font-size: 20px;
            color: #5a4634;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .contact-label {
            font-size: 14px;
            color: #5a4634;
            margin-bottom: 20px;
        }

        .contact-button {
            background: #a94442;
            color: #fff;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
            text-decoration: none;
            display: inline-block;
        }

        .contact-button:hover {
            background: #ff8800;
        }

        @media (max-width: 900px) {
            .contact-hero {
                padding: 60px 16px;
            }
            .contact-title {
                font-size: 32px;
            }
            .contact-subtitle {
                font-size: 40px;
            }
            .info-section-title {
                font-size: 24px;
                margin-bottom: 30px;
            }
            .contact-cards-container {
                gap: 30px;
            }
            .contact-card {
                width: 320px;
            }
        }

        @media (max-width: 600px) {
            .contact-hero {
                padding: 40px 10px;
            }
            .contact-title {
                font-size: 28px;
                margin-bottom: 10px;
            }
            .contact-subtitle {
                font-size: 32px;
            }
            .info-section-title {
                font-size: 20px;
                margin-bottom: 25px;
            }
            .contact-cards-container {
                flex-direction: column;
                align-items: center;
                gap: 25px;
            }
            .contact-card {
                width: 90%;
                max-width: 300px;
                padding: 30px;
            }
            .contact-hero::before,
            .contact-hero::after {
                width: 60px;
            }
            .contact-hero::before {
                top: 15%;
                left: -5px;
            }
            .contact-hero::after {
                top: 85%;
                right: -5px;
            }
        }

        /* Social Media Section Styles */
        .social-media-section {
            padding: 80px 24px;
            text-align: center;
            background: #e9ded6;
        }

        .social-media-title {
            font-size: 28px;
            color: #5a4634;
            margin-bottom: 40px;
            font-weight: 700;
        }

        .social-media-cards-container {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .social-media-card {
            background: #d4c1a5;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            width: 320px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .social-media-icon-wrapper {
            background-color: #a68a64;
            border-radius: 50%;
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
        }

        .social-media-icon-wrapper img {
            width: 60px;
            height: 60px;
        }

        .social-media-platform {
            font-size: 20px;
            color: #5a4634;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .social-media-description {
            font-size: 14px;
            color: #5a4634;
            margin-bottom: 20px;
        }

        /* Address Section Styles */
        .address-section {
            padding: 80px 24px;
            background: #e9ded6;
            text-align: center;
        }

        .address-title {
            font-size: 28px;
            color: #5a4634;
            margin-bottom: 40px;
            font-weight: 700;
            text-align: left;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding: 0 24px;
        }

        .address-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .map-container {
            flex: 1;
            min-width: 300px;
            max-width: 600px;
            height: 400px;
            background: #ccc; /* Placeholder for map */
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        .address-details {
            flex: 1;
            min-width: 300px;
            max-width: 400px;
            background: #d4c1a5;
            padding: 30px;
            border-radius: 10px;
            text-align: left;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .address-details h3 {
            font-size: 24px;
            color: #5a4634;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .address-details p {
            font-size: 16px;
            color: #5a4634;
            line-height: 1.6;
        }

        @media (max-width: 900px) {
            .social-media-section,
            .address-section {
                padding: 60px 16px;
            }
            .social-media-cards-container {
                gap: 30px;
            }
            .social-media-card {
                width: 280px;
            }
            .address-title {
                padding: 0 16px;
            }
            .address-content {
                flex-direction: column;
                align-items: center;
            }
            .map-container {
                max-width: 90%;
            }
            .address-details {
                max-width: 90%;
            }
        }

        @media (max-width: 600px) {
            .social-media-section,
            .address-section {
                padding: 40px 10px;
            }
            .social-media-title,
            .address-title {
                font-size: 24px;
                margin-bottom: 30px;
            }
            .social-media-cards-container {
                flex-direction: column;
                align-items: center;
                gap: 25px;
            }
            .social-media-card {
                width: 90%;
                max-width: 280px;
            }
            .address-title {
                padding: 0 10px;
            }
            .map-container {
                height: 300px;
            }
            .address-details h3 {
                font-size: 20px;
            }
            .address-details p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo"><span>TL</span> Tumbuh Lestari</div>
        <div class="nav-menu">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="produk.php">Products</a>
            <a href="blog.php">Blog</a>
        </div>
    </div>

    <div class="contact-hero">
        <h2 class="contact-title">Terhubung dengan kami</h2>
        <h1 class="contact-subtitle">Tumbuh Lestari</h1>
    </div>

    <div class="contact-info-section">
        <h2 class="info-section-title">Email dan Telepon</h2>
        <div class="contact-cards-container">
            <div class="contact-card">
                <div class="contact-icon-wrapper">
                    <img src="https://svgshare.com/i/14mB.svg" alt="Email Icon">
                </div>
                <p class="contact-detail">tumbuhlestaritalks@gmail.com</p>
                <p class="contact-label">Alamat email Tumbuh Lestari</p>
                <a href="mailto:tumbuhlestaritalks@gmail.com" class="contact-button">Kirim Email</a>
            </div>
            <div class="contact-card">
                <div class="contact-icon-wrapper">
                    <img src="https://svgshare.com/i/14mE.svg" alt="Phone Icon">
                </div>
                <p class="contact-detail">+62 838 3203 3996</p>
                <p class="contact-label">Nomor telepon Tumbuh Lestari</p>
                <a href="tel:+6283832033996" class="contact-button">Hubungi Kami</a>
            </div>
        </div>
    </div>

    <div class="social-media-section">
        <h2 class="social-media-title">Social Media</h2>
        <div class="social-media-cards-container">
            <div class="social-media-card">
                <div class="social-media-icon-wrapper">
                    <img src="https://svgshare.com/i/14mj.svg" alt="Instagram Icon">
                </div>
                <p class="social-media-platform">@tumbuhlestarikopi</p>
                <p class="social-media-description">Official Instagram Tumbuh Lestari</p>
                <a href="https://www.instagram.com/tumbuhlestarikopi/" target="_blank" class="contact-button">Kunjungi</a>
            </div>
            <div class="social-media-card">
                <div class="social-media-icon-wrapper">
                    <img src="https://svgshare.com/i/14mh.svg" alt="Tokopedia Icon">
                </div>
                <p class="social-media-platform">Tumbuh Lestari Kopi</p>
                <p class="social-media-description">Official Tokopedia Tumbuh Lestari</p>
                <a href="#" target="_blank" class="contact-button">Kunjungi</a> <!-- Placeholder for Tokopedia link -->
            </div>
            <div class="social-media-card">
                <div class="social-media-icon-wrapper">
                    <img src="https://svgshare.com/i/14mi.svg" alt="Shopee Icon">
                </div>
                <p class="social-media-platform">Tumbuh Lestari Kopi</p>
                <p class="social-media-description">Official Shopee Tumbuh Lestari</p>
                <a href="#" target="_blank" class="contact-button">Kunjungi</a> <!-- Placeholder for Shopee link -->
            </div>
        </div>
    </div>

    <div class="address-section">
        <h2 class="address-title">Alamat</h2>
        <div class="address-content">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6728080829875!2d107.61864197475143!3d-6.931818293060795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e718b52579b1%3A0xc30424564c4c23f2!2sTumbuh%20Lestari%20Kopi!5e0!3m2!1sen!2sid!4v1700683076735!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="address-details">
                <h3>Tumbuh Lestari Kopi</h3>
                <p>Jl. Sekelimus VII No.5, RT.002/RW.006, Batununggal, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40266</p>
            </div>
        </div>
    </div>

</body>
</html> 