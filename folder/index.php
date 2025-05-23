<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cate’s Branding Websites</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .container { text-align: center; padding: 20px; }
        .container1 { text-align: center; padding: 30px; position: relative; }
        .slider { position: relative; overflow: hidden; border-radius: 10px; }
        .slides { display: flex; transition: transform 0.5s ease; position: relative; }
        .slide { min-width: 100%; transition: opacity 0.5s ease; position: relative; }
        .dimmed-image { filter: brightness(0.3); width: 100%; border-radius: 10px; }
        .button-container { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); display: flex; gap: 20px; }
        .btn { background: #ff6347; color: white; border: none; padding: 15px 30px; font-size: 18px; cursor: pointer; border-radius: 5px; transition: transform 0.2s, background 0.2s; }
        .btn:hover { transform: scale(1.1); background: #ffa07a; }
        .arrow { position: absolute; top: 50%; transform: translateY(-50%); font-size: 2rem; color: white; background: rgba(0, 0, 0, 0.5); border: none; cursor: pointer; z-index: 10; }
        .arrow-left { left: 10px; }
        .arrow-right { right: 10px; }.slide-text {
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
    }

    .slide-text h2 {
        font-size: 36px;
        margin: 0;
    }

    .slide-text p {
        font-size: 18px;
    }

    .navbar {
        background: #ff6347;
        padding: 10px;
        display: flex;
        align-items: center;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
    }
    .navbar .logo { margin-left: 15px; height: 50px; }
    .navbar ul { list-style: none; margin: 0 auto; padding: 0; display: flex; justify-content: center; }
    .navbar li { position: relative; margin: 0 15px; }
    .navbar a { text-decoration: none; color: white; font-size: 18px; padding: 10px 20px; display: block; transition: transform 0.2s; }
    .navbar a:hover { transform: scale(1.1); }

    .dropdown {
        position: relative;
         ;
    }

    .dropdown-content {
        display:none;
        position: absolute;
        background-color: #ff6347;
        min-width: 160px;
        box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
        z-index: 1;
        flex-direction: column;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease;
          
    }

    .dropdown-content li {
        margin: 0;
      
    }

    .dropdown-content a {
        padding: 10px 16px;
        display: block;
        
    }

    .dropdown:hover .dropdown-content {
        display: flex;
        visibility: visible;
        opacity: 1;
        transform: translateY(0);
        
    }
    

    .navbar-small-icons {
        background-color: #ff6347;
        padding: 10px 0;
        text-align: center;
        margin-top: 70px;
    }

    .navbar-small-icons ul {
        list-style: none;
        padding: 0;
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .navbar-small-icons li {
        display: inline-block;
    }

    .navbar-small-icons .icon {
        width: 30px;
        height: 30px;
        transition: transform 0.2s;
    }

    .navbar-small-icons .icon:hover {
        transform: scale(1.2);
    }

    .pizza-gallery { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; padding: 20px; }
    .pizza-gallery div { text-align: center; }
    .pizza-gallery img { width: 100%; border-radius: 10px; transition: transform 0.2s; }
    .pizza-gallery img:hover { transform: scale(1.1); }

    .about-pizza { display: flex; justify-content: space-between; align-items: center; padding: 40px 20px; background-color: #f4f4f4; }
    .about-pizza img { width: 45%; border-radius: 10px; }
    .about-pizza .text { width: 45%; font-size: 18px; color: #333; }
    .about-pizza .text h2 { color: #ff6347; }
    .about-pizza .text p { line-height: 1.6; }
</style>

</head>
<body>
    <div class="navbar">
        <img src="im.png" alt="Crave Crust" class="logo">
        <ul>
            <li tabindex="0"><a href="#">Home</a></li>
            <li class="dropdown">
                <a href="#">Services</a>
                <ul class="dropdown-content">
                    <li><a href="order.php">Marketing</a></li>
                    <li><a href="order.php">Branding</a></li>
                    <li><a href="order.php">Animations</a></li>
                </ul>
            </li>
            <li><a href="#order">Team</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div><br><br><div class="navbar-small-icons">
    <ul>
        <li><a href="#"><img src="delivery-man.png" alt="Icon 1" class="icon"></a></li>
        <li><a href="#"><img src="customer-service.png" alt="Icon 1" class="icon"></a></li>
        <li><a href="#"><img src="phone-contact.png" alt="Icon 1" class="icon"></a></li>
        <li><a href="#"><img src="location.png" alt="Icon 1" class="icon"></a></li>
        <li><a href="#"><img src="twitter.png" alt="Icon 1" class="icon"></a></li>
    </ul>
</div>

<div class="container1">
    <h1 style="font-size:40px; font-family: Comic Sans">WELCOME TO CATE'S BRANDING</h1>
    <h2 style="font-family: Comic Sans">"✨We craft unforgettable brand experiences✨."</h2>
    
    <div class="slider">
        <div class="slides">
            <div class="slide">
                <!--<img src="6.jpg" alt="Delicious Pizza 3" class="dimmed-image">-->
                <div class="slide-text">
                    
                   <video src="ad.mp4" autoplay muted loop controls style="width:1400px;"></video>
                </div>
            </div>
            
            <div class="slide">
                <img src="7.jpg" alt="Delicious Pizza 2" class="dimmed-image">
                <div class="slide-text">
                    <h2>Brand Identity & Design🎨</h2>
                    <p>We craft legendary visual assets that capture your story and set you apart.</p>
                </div>
            </div>
            <div class="slide">
                <img src="8.jpg" alt="Delicious Pizza 1" class="dimmed-image">
                <div class="slide-text">
                    <h2>Comprehensive Brand Strategy📊</h2>
                    <p>Data-driven market positioning to ensure your brand dominates every platform.</p>
                </div>
            </div>
            <div class="slide">
                <img src="9.jpg" alt="Delicious Pizza 3" class="dimmed-image">
                <div class="slide-text">
                    <h2>Event & Campaign Branding🎤</h2>
                    <p>We design materials that turn your products into the talk of the town.</p>
                </div>
            </div>
            <div class="slide">
                <img src="rep.png" alt="Delicious Pizza 2" class="dimmed-image">
                <div class="slide-text">
                    <h2>Reputation Management🛡️</h2>
                    <p>We turn crises into opportunities, strengthening your brand’s integrity.</p>
                </div>
            </div>
            <div class="slide">
                <img src="Web-Development.jpeg" alt="Delicious Pizza 1" class="dimmed-image">
                <div class="slide-text">
                    <h2>Web & App Development💻</h2>
                    <p>We create responsive websites and game-changing apps for SMEs and enterprises.</p>
                </div>
            </div>
            
        </div>
        <button class="arrow arrow-left" onclick="moveSlide(-1)">&#10094;</button>
        <button class="arrow arrow-right" onclick="moveSlide(1)">&#10095;</button>
    </div>
    
    <div class="button-container">
        <button class="btn" onclick="window.location.href='#order'">Services</button>
        <button class="btn" onclick="window.location.href='#contact'">Join Us</button>
    </div>
</div>

<div class="about-pizza">
    <img src="5.jpg" alt="Delicious Pizza">
    <div class="text">
        <h2>About Cate's branding⚙️</h2>
        <p>We are a leading branding agency specializing in brand identity, PR, IT solutions, and multimedia services.
        
            With years of experience, we help brands <strong>stand out, build trust, and engage audiences</strong> through innovative design and storytelling. 
                Whether you're a startup or a global brand, we craft strategies tailored to your unique vision.
            </p>
        <button class="btn" onclick="window.location.href='#order'">Get started</button>
    </div>
</div>

<div class="container">
    <h1>"BRANDING YOU TO SHINE"</h1>
    <div class="pizza-gallery">
        <div>
            <img src="1.jpg" alt="Delicious Pizza 1">
            <p>We craft legendary visual assets that capture your story and set you apart.</p>
        </div>
        <div>
            <img src="2.jpg" alt="Tasty Pizza 2">
            <p>Data-driven market positioning to ensure your brand dominates every platform.</p>
        </div>
        <div>
            <img src="3.jpg" alt="Yummy Pizza 3">
 <p>We design materials that turn your products into the talk of the town.</p>
        </div>
        <div>
            <img src="4.jpg" alt="Savory Pizza 4">
          <p>We turn crises into opportunities, strengthening your brand’s integrity.</p>
        </div>
    </div>
</div>

<script>
    let currentIndex = 0;
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length;

    function moveSlide(direction) {
        currentIndex = (currentIndex + direction + totalSlides) % totalSlides;
        slides.style.transform = `translateX(-${currentIndex * 100}%)`;
    }
</script>

<footer style="background: #ff6347; color: white; text-align: center; padding: 20px; margin-top: 20px; font-size: 16px;">
    <p>&copy; 2025 Crave Crust. All Rights Reserved.</p>
</footer>

</body>
</html>