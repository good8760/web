<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cate’s Branding Websites</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background-color: #1a1a2e;
    color: #fff;
}

/* Header */
header {
    background: #000080;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}

.logo img {
    width: 100px;
    position: absolute;
    top: 20px;
    left: 20px;
}

/* Navigation */
nav {
    position: absolute;
    top: 20px;
    right: 20px;
}

.nav-area {
    list-style: none;
    display: flex;
}

.nav-area li {
    margin: 0 15px;
    position: relative;
}

.nav-area li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    padding: 8px 12px;
    transition: 0.3s ease;
}

/* Dropdown Menu */
.nav-area .dropdown {
    display: none;
    position: absolute;
    background: white;
    min-width: 150px;
    top: 30px;
    left: 0;
    border-radius: 5px;
}

.nav-area li:hover .dropdown {
    display: block;
}

.dropdown li {
    padding: 10px;
}

.dropdown li a {
    color: #ff416c;
}

.nav-area li a:hover {
    background: white;
    color: #ff416c;
    border-radius: 20px;
}

/* Hero Text */
.hero-text {
    margin-top: 50px;
}

.hero-text h1 {
    font-size: 48px;
    font-weight: bold;
    margin-bottom: 10px;
}

.hero-text p {
    font-size: 20px;
    margin-bottom: 20px;
}

/* CTA Button */
.cta-button {
    display: inline-block;
    background: white;
    color: #ff416c;
    padding: 10px 20px;
    font-size: 20px;
    font-weight: bold;
    border-radius: 30px;
    transition: 0.3s ease;
    text-decoration: none;
}

.cta-button:hover {
    background: #ff416c;
    color: white;
    transform: scale(1.1);
}

/* Services Section */
.services {
    padding: 50px;
    text-align: center;
    background: #121212;
}

.services h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.services-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px;
}

/* Service Card */
.service-card {
    background: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    color: black;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.service-card .icon {
    font-size: 40px;
    margin-bottom: 10px;
}

.service-card h3 {
    font-size: 22px;
    color: #ff416c;
    margin-bottom: 10px;
}

.service-card p {
    font-size: 16px;
    color: #555;
}

/* Responsive Design */
@media (max-width: 768px) {
    .services-container {
        grid-template-columns: 1fr;
    }

    .nav-area {
        flex-direction: column;
    }

    .nav-area li {
        margin-bottom: 10px;
    }
}
</style>
<body>

    <header>
        <div class="logo">
            <img src="folder/logo.PNG" alt="Cates Branding">
        </div>
        <nav>
            <ul class="nav-area">
                <li><a href="home12.php">Home</a></li>
                <li><a href="services.php">Services</a>
                    <ul class="dropdown">
                        <li><a href="#">Branding</a></li>
                        <li><a href="#">Public Relations</a></li>
                        <li><a href="#">Information Technology</a></li>
                        <li><a href="#">Multimedia</a></li>
                    </ul>
                </li>
                <li><a href="team.php">Our Team</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

        <div class="hero-text">
            <h1>Welcome to Cate’s Branding</h1>
            <p>We craft unforgettable brand experiences.</p>
            <a href="#" class="cta-button">Get Started</a>
        </div>
    </header>
    
    
    

    <!-- About Us Section -->
    <style>
        .about {
    background: #f8f9fa;
    color: #333;
    padding: 80px 50px;
    text-align: center;
}

.about h2 {
    font-size: 36px;
    margin-bottom: 20px;
    color: #ff416c;
}

.about-container {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
}

.about-text {
    flex: 1;
    max-width: 600px;
    padding: 20px;
    text-align: left;
}

.about-text p {
    font-size: 18px;
    margin-bottom: 15px;
    line-height: 1.6;
}

.about-image {
    flex: 1;
    max-width: 500px;
    text-align: center;
}

.about-image img {
    width: 100%;
    max-width: 450px;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

/* Mission & Vision Section */
.mission-vision-container {
    display: flex;
    justify-content: center;
    gap: 50px;
    margin-top: 50px;
    flex-wrap: wrap;
}

.mission, .vision {
    background: white;
    padding: 20px;
    max-width: 450px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.mission h3, .vision h3 {
    font-size: 24px;
    color: #ff416c;
    margin-bottom: 10px;
}

.mission p, .vision p {
    font-size: 18px;
    color: #555;
}

/* Responsive Design */
@media (max-width: 768px) {
    .about-container {
        flex-direction: column;
        text-align: center;
    }

    .about-text {
        text-align: center;
    }

    .about-image img {
        max-width: 80%;
    }

    .mission-vision-container {
        flex-direction: column;
        align-items: center;
    }

    .mission, .vision {
        max-width: 90%;
    }
}
        
    </style>
    <section id="about" class="about">
        <h2>About Us</h2>
        <div class="about-container">
            <div class="about-text">
                <p>
                    Cate’s Branding is a leading branding and digital solutions company dedicated to transforming businesses and nations through powerful brand strategies.
                    Our expertise spans **brand identity, marketing, IT solutions, public relations, and multimedia services**. 
                </p>
                <p>
                    With years of experience, we help brands **stand out, build trust, and engage audiences** through innovative design and storytelling. 
                    Whether you're a startup or a global brand, we craft strategies tailored to your unique vision.
                </p>
            </div>
            <div class="about-image">
                <img src="about-us.jpg" alt="About Cate's Branding">
            </div>
        </div>

        <!-- Mission & Vision Section -->
        <div class="mission-vision-container">
            <div class="mission">
                <h3>Our Mission</h3>
                <p>
                    To empower businesses and nations with **strategic branding, cutting-edge technology, and impactful storytelling** that fosters innovation and growth.
                </p>
            </div>
            <div class="vision">
                <h3>Our Vision</h3>
                <p>
                    To be the **go-to global branding powerhouse**, shaping industries and elevating businesses through creativity, technology, and trust.
                </p>
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <section class="services">
        <h2>Our Services</h2>
        <div class="services-container">
            <?php
            $services = [
                ["Brand Identity & Design", "We craft legendary visual assets that capture your story and set you apart.", "🎨"],
                ["Comprehensive Brand Strategy", "Data-driven market positioning to ensure your brand dominates every platform.", "📊"],
                ["Event & Campaign Branding", "We design materials that turn your products into the talk of the town.", "🎤"],
                ["Reputation Management", "We turn crises into opportunities, strengthening your brand’s integrity.", "🛡️"],
                ["Web & App Development", "We create responsive websites and game-changing apps for SMEs and enterprises.", "💻"],
                ["Cybersecurity & Data Management", "Robust security solutions to protect your valuable digital assets.", "🔐"],
                ["Visual Content Design", "We create social media graphics, infographics, and investor-ready proposals.", "🖼️"],
                ["Motion Graphics & Animation", "Engaging 2D/3D animations for brand storytelling and explainer videos.", "🎞️"]
            ];
            foreach ($services as $service) {
                echo "
                <div class='service-card'>
                    <div class='icon'>{$service[2]}</div>
                    <h3>{$service[0]}</h3>
                    <p>{$service[1]}</p>
                </div>
                ";
            }
            ?>
        </div>
    </section>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
    const button = document.querySelector(".cta-button");

    button.addEventListener("mouseenter", function() {
        button.style.transform = "scale(1.2)";
    });

    button.addEventListener("mouseleave", function() {
        button.style.transform = "scale(1)";
    });
});
    </script>
    
     <!-- Footer Section -->
    <style>
        footer {
    background: #1a1a2e;
    color: white;
    padding: 50px 20px;
    text-align: center;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: auto;
}

.footer-about, .footer-links, .footer-contact {
    flex: 1;
    padding: 20px;
    min-width: 250px;
}

.footer-about h3, .footer-links h3, .footer-contact h3 {
    font-size: 22px;
    margin-bottom: 15px;
    color: #ff416c;
}

.footer-about p, .footer-contact p {
    font-size: 16px;
    color: #ccc;
}

/* Footer Links */
.footer-links ul {
    list-style: none;
    padding: 0;
}

.footer-links ul li {
    margin: 10px 0;
}

.footer-links ul li a {
    color: white;
    text-decoration: none;
    transition: 0.3s ease;
}

.footer-links ul li a:hover {
    color: #ff416c;
}

/* Social Icons */
.social-icons a {
    display: inline-block;
    margin-right: 10px;
}

.social-icons img {
    width: 30px;
    transition: 0.3s ease;
}

.social-icons img:hover {
    transform: scale(1.2);
}

/* Footer Bottom */
.footer-bottom {
    margin-top: 20px;
    font-size: 14px;
    color: #ccc;
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        text-align: center;
    }
}
        
    </style>
    <footer>
        <div class="footer-container">
            <div class="footer-about">
                <h3>About Cate’s Branding</h3>
                <p>We are a leading branding agency specializing in brand identity, PR, IT solutions, and multimedia services.</p>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="team.php">Our Team</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: info@catesbranding.com</p>
                <p>Phone: +268 76143711/79748760</p>
                <div class="social-icons">
                    <a href="#"><img src="folder/Facebook.png" alt="Facebook"></a>
                    <a href="#"><img src="folder/WhatsApp.png" alt="Twitter"></a>
                    <a href="#"><img src="folder/Instagram.jpeg" alt="Instagram"></a>
                    <a href="#"><img src="folder/download-17.png" alt="LinkedIn"></a>
                </div>
            </div>
        </div>
        <p class="footer-bottom">&copy; 2025 Cate’s Branding. All Rights Reserved.</p>
    </footer>

</body>
</html>
