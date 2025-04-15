<!DOCTYPE html>
<html lang="en">
    
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
    <link rel="stylesheet" href="styles.css">
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
header1 {
     background: #000080;
    height: 120px;
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

    <header1>
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

       
    </header1>
    
<body>

    <header>
        <h1>Cate’s Branding Services</h1>
    </header>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background: #f5f5f5;
    color: #333;
}

/* Header */
header {
    text-align: center;
    background: #1a1a2e;
    color: #fff;
    padding: 20px;
}

/* Services Container */
.services-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    padding: 40px;
}

/* Service Card */
.service-card {
    background: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
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

.service-card h2 {
    font-size: 22px;
    color: #1a1a2e;
    margin-bottom: 10px;
}

.service-card p {
    font-size: 16px;
    color: #555;
}

/* Responsive */
@media (max-width: 768px) {
    .services-container {
        grid-template-columns: 1fr;
    }
}

        
    </style>

    <section class="services-container">
        <?php
        $services = [
            [
                "title" => "Brand Identity & Design",
                "desc" => "We craft legendary visual assets that capture your story and set you apart.",
                "icon" => "🎨"
            ],
            [
                "title" => "Comprehensive Brand Strategy",
                "desc" => "Data-driven market positioning to ensure your brand dominates every platform.",
                "icon" => "📊"
            ],
            [
                "title" => "Event & Campaign Branding",
                "desc" => "We design materials that turn your products into the talk of the town.",
                "icon" => "🎤"
            ],
            [
                "title" => "Reputation Management",
                "desc" => "We turn crises into opportunities, strengthening your brand’s integrity.",
                "icon" => "🛡️"
            ],
            [
                "title" => "Web & App Development",
                "desc" => "We create responsive websites and game-changing apps for SMEs and enterprises.",
                "icon" => "💻"
            ],
            [
                "title" => "Cybersecurity & Data Management",
                "desc" => "Robust security solutions to protect your valuable digital assets.",
                "icon" => "🔐"
            ],
            [
                "title" => "Visual Content Design",
                "desc" => "We create social media graphics, infographics, and investor-ready proposals.",
                "icon" => "🖼️"
            ],
            [
                "title" => "Motion Graphics & Animation",
                "desc" => "Engaging 2D/3D animations for brand storytelling and explainer videos.",
                "icon" => "🎞️"
            ]
        ];

        foreach ($services as $service) {
            echo "
            <div class='service-card'>
                <div class='icon'>{$service['icon']}</div>
                <h2>{$service['title']}</h2>
                <p>{$service['desc']}</p>
            </div>
            ";
        }
        ?>
    </section>

</body>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll(".service-card");

    cards.forEach(card => {
        card.addEventListener("mouseenter", function() {
            card.style.backgroundColor = "#1a1a2e";
            card.style.color = "#fff";
        });

        card.addEventListener("mouseleave", function() {
            card.style.backgroundColor = "#fff";
            card.style.color = "#333";
        });
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
