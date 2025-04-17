<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services - Cate's Branding</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fdfdfd;
        }.navbar {
        background: #ff6347;
        padding: 10px;
        display: flex;
        align-items: center;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
    }

    .navbar .logo {
        margin-left: 15px;
        height: 50px;
    }

    .navbar ul {
        list-style: none;
        margin: 0 auto;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    .navbar li {
        position: relative;
        margin: 0 15px;
    }

    .navbar a {
        text-decoration: none;
        color: white;
        font-size: 18px;
        padding: 10px 20px;
        display: block;
        transition: transform 0.2s;
    }

    .navbar a:hover {
        transform: scale(1.1);
    }

    .navbar li ul {
        display: none;
        position: absolute;
        background-color: #ff8266;
        top: 100%;
        left: 0;
        min-width: 160px;
        z-index: 1001;
    }

    .navbar li:hover ul {
        display: block;
    }

    .navbar li ul li {
        margin: 0;
    }

    .services-container {
        padding: 100px 20px 40px;
        max-width: 1200px;
        margin: auto;
    }

    .video-container {
        display: flex;
        justify-content: center;
        margin-bottom: 40px;
    }

    .video-box {
        width: 90%;
        max-width: 800px;
        border: 4px solid #ff6347;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .video-box video {
        width: 100%;
        height: auto;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        animation: fadeInUp 1s ease-in-out;
    }

    .service-card {
        background: white;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }

    .service-card h3 {
        color: #ff6347;
        margin-bottom: 10px;
    }

    .service-card p {
        font-size: 16px;
        color: #333;
        line-height: 1.6;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    footer {
        background: #ff6347;
        color: white;
        text-align: center;
        padding: 20px;
        font-size: 16px;
        margin-top: 40px;
    }
</style>

</head>
<body>
    <div class="navbar">
        <img src="im.png" alt="Crave Crust" class="logo">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                 <a href="#">Services</a>
                <ul class="dropdown-content">
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Animations</a></li>
                </ul>
            </li>
            <li><a href="#order">Order</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div><div class="services-container">
    <div class="video-container">
        <div class="video-box">
            <video src="ad.mp4" autoplay muted loop controls></video>
        </div>
    </div>

    <div class="services-grid">
        <div class="service-card">
            <h1 style="margin-left: 100px;">🎨</h1>
                <h3>Brand Identity & Design</h3>
            <p>We craft legendary visual assets that capture your story and set you apart in the market.</p>
        </div>
        <div class="service-card">
            <h1 style="margin-left: 100px;">📊</h1>
            <h3>Comprehensive Brand Strategy</h3>
            <p>We build data-driven strategies that ensure your brand dominates every platform.</p>
        </div>
        <div class="service-card">
            <h1 style="margin-left: 100px;">🎤</h1>
            <h3>Event & Campaign Branding</h3>
            <p>From posters to digital assets, we ensure your campaigns are unforgettable.</p>
        </div>
        <div class="service-card">
            <h1 style="margin-left: 100px;">🛡️</h1>
            <h3>Reputation Management</h3>
            <p>We monitor and protect your brand’s integrity, turning crises into opportunities.</p>
        </div>
        <div class="service-card">
            <h1 style="margin-left: 100px;">💻</h1>
            <h3>Web & App Development</h3>
            <p>We create responsive websites and powerful apps tailored to your business goals.</p>
        </div>
        <div class="service-card">
            <h1 style="margin-left: 100px;">🎞️</h1>
            <h3>Social Media Marketing</h3>
            <p>Engage your audience and grow your brand with our targeted social strategies.</p>
        </div>
        
        
        <div class="service-card">
            <h1 style="margin-left: 100px;">🔐</h1>
            <h3>Cybersecurity & Data Management</h3>
            <p>Robust security solutions to protect your valuable digital assets.</p>
        </div>
        <div class="service-card">
            <h1 style="margin-left: 100px;">🖼️</h1>
            <h3>Visual Content Design</h3>
            <p>We create social media graphics, infographics, and investor-ready proposals.</p>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2025 Cate's Branding. All Rights Reserved.</p>
</footer>

</body>
</html>