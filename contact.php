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

</body>
</html> 