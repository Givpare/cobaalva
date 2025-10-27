    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landing Page IziCharge</title>
        <style>
            @font-face {
                font-family: 'opensans';
                src: url('font/open-sans.ttf'); format('truetype');
                font-weight: normal;
                font-style: normal;
            }
            /* CSS Dasar untuk Styling dan Layout */
            body {
                font-family: 'opensans', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #000;
                color: #fff;
            }
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
            }
            
            /* Navigasi */
            header {
                background: #000;
                opacity: 0.8;
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1000;
                padding: 15px 0;
                border-bottom: 1px solid #333;
            }
            nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            
            /* CSS untuk Gambar Logo */
            .logo-image {
                height: 75px; /* Atur tinggi logo */
                width: auto;
            }
            
            nav ul {
                list-style: none;
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 0;
                padding: 0;
            }
            nav ul li {
                margin-left: 30px;

            }
            nav ul a {
                color: #fff;
                text-decoration: none;
                font-size: 14px;
                opacity: 0.7;
                transition: opacity 1s;                
            }
            nav ul a:hover {
                opacity: 0.5;
            }

            /* Hero Section */
            #hero {
                position: relative;
                padding: 150px 0 100px;
                min-height: 600px;
                background-color: #000;
                overflow: hidden;
                display: flex;
                align-items: flex-start; 
            }
            .hero-content {
                position: relative; 
                z-index: 2; 
                flex: 1;
                margin-left: 50px;
            }
            #hero h1 {
                font-size: 60px;
                line-height: 2.0;
                max-width: 600px;
                margin-bottom: 20px;
                font-weight: 900;
                text-align: left;
            }
            .cta-button {
                display: inline-block;
                background-color: #bfff00;
                color: #000;
                padding: 10px 30px;
                text-decoration: none;
                font-weight: bold;
                border-radius: 5px;
                margin-top: 20px;
            }
            
            /* CSS untuk Gambar Mobil di Hero Section */
            .hero-image {
                position: absolute;
                top: 0;
                right: 0;
                height: 100%;
                width: 100%; 
                z-index: 0;
                overflow: hidden;
            }
            .hero-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: center right;
                opacity: 0.8; 
            }

            /* Why Choose Us */
            #why-choose-us {
                padding: 80px 0;
                background-color: #000;
                position: relative;
            }
            #why-choose-us h2 {
                font-size: 50px;
                margin-bottom: 50px;
                
            }
            .revolutionary-text {
                font-size: 40px;
                line-height: 1.4;
                max-width: 1000px;
                border-bottom: 2px solid #bfff00;
                padding-bottom: 20px;
                margin-bottom: 50px;
                position: relative;
                display: inline-block;
            }
            .arrow-line {
                color: #ffffffff;
                font-weight: bold;
                display: inline-block;
                width: 100px;
                height: 20px;
                margin-left: -5px;
                margin-right: -10px;
                position: relative;
            }
            .why-choose-us-layout {
                display: flex;
                justify-content: space-between;
                align-items: flex-end;
                gap: 20px;
                margin-top: 80px;
                position: relative;
                height: 550px;
            }
            .main-image-container {
                position: relative;
                width: 100%;
                height: 100%;
                margin-top: 200px;
                border-radius: 20px;
                overflow: hidden;

                background-image: url('assets/car-cover.jpg');
                background-size: cover;
                background-position: center bottom;
                background-repeat: no-repeat;
                
            }
            .main-image-container .revolution-statement {
                position: absolute;
                top: 200px;
                right: 300px;
                z-index: 2;

                max-height: 1400px;
                font-size: 16px;
                line-height: 1.5;
                background-color: rgba(0, 0, 0, 0.6);
                padding: 15px;
                border-radius: 10px;
                color: #fff;
                margin: 0;
            }
            .revolution-statement {
                font-size: 26px;
                max-width: 500px;
                margin-top: 50px;
            }

            /* Features Section */
            #features {
                padding: 80px 0;
                background-color: #000;
            }
            .charge-anywhere-container {
                display: flex;
                align-items: flex-start;
                gap: 50px;
            }
            .features-list {
                flex: 1;
            }
            .feature-item {
                border-bottom: 1px solid #333;
                padding: 20px 0;
            }
            .feature-item h3 {
                color: #bfff00;
                font-size: 20px;
                margin-bottom: 5px;
            }
            .feature-item p {
                opacity: 0.7;
            }
            .charge-anywhere {
                background-color: #bfff00;
                color: #000;
                padding: 40px;
                text-align: center;
                border-radius: 10px;
                font-size: 24px;
                font-weight: bold;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-width: 300px;
            }

            /* Pricing Section */
            #pricing {
                padding: 80px 0;
                background-color: #000;
                text-align: center;
            }
            #pricing h2 {
                font-size: 40px;
                margin-bottom: 10px;
            }
            #pricing p {
                opacity: 0.7;
                margin-bottom: 50px;
            }
            .pricing-cards {
                display: flex;
                gap: 20px;
                justify-content: center;
                flex-wrap: wrap;
            }
            .card {
                background-color: #111;
                border: 2px solid #333;
                border-radius: 10px;
                padding: 30px;
                width: 280px;
                text-align: left;
                transition: transform 0.3s;
            }
            .card.highlight {
                background-color: #000;
                border-color: #bfff00;
                box-shadow: 0 0 20px rgba(191, 255, 0, 0.5);
            }
            .card h3 {
                color: #bfff00;
                font-size: 24px;
                margin-bottom: 10px;
            }
            .card .plan-type {
                font-size: 18px;
                opacity: 0.9;
            }
            .card .price {
                font-size: 48px;
                font-weight: bold;
                margin: 10px 0;
                color: #fff;
            }
            .card .month {
                font-size: 16px;
                opacity: 0.7;
            }
            .card ul {
                list-style: disc;
                padding-left: 20px;
                margin: 20px 0;
                font-size: 14px;
                opacity: 0.8;
            }
            .card ul li {
                margin-bottom: 8px;
            }
            .card .cta {
                display: block;
                text-align: center;
                padding: 10px;
                margin-top: 20px;
                text-decoration: none;
                font-weight: bold;
                border-radius: 5px;
            }
            .card .cta.standard {
                background-color: #bfff00;
                color: #000;
            }
            .card .cta.premium {
                border: 2px solid #bfff00;
                color: #bfff00;
            }
            .card .cta.enterprise {
                border: 2px solid #fff;
                color: #fff;
            }

            /* Footer */
            footer {
                padding: 50px 0;
                background-color: #0a0a0a;
                border-top: 1px solid #333;
                font-size: 14px;
            }
            .footer-content {
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }
            .footer-col {
                width: 25%;
                min-width: 200px;
                margin-bottom: 20px;
            }
            .footer-col h4 {
                color: #bfff00;
                margin-bottom: 15px;
            }
            .footer-col ul {
                list-style: none;
                padding: 0;
            }
            .footer-col ul li {
                margin-bottom: 10px;
            }
            .footer-col a, .footer-col p {
                color: #fff;
                text-decoration: none;
                opacity: 0.7;
            }
            .footer-col a:hover {
                opacity: 1;
            }
            .copyright {
                text-align: center;
                padding-top: 20px;
                border-top: 1px solid #333;
                margin-top: 30px;
                opacity: 0.6;
            }
        </style>
    </head>
    <body>

        <header>
            <div class="container">
                <nav>
                    <img src="assets/logo.png" alt="IZI Charge Logo" class="logo-image">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#contact-us">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="hero" class="container">
            <div class="hero-content">
                <h1>
                    We Bring Future Ready<br>
                    Chargig To Your<br>
                    Everyday Life
                </h1>
                <a href="#" class="cta-button">Learn More</a>
            </div>

            <div class="hero-image">
                <img src="assets\car-cover.jpg" alt="Electric vehicle charging station">
            </div>
        </section>

        <section id="why-choose-us">
            <div class="container">
                <h2>Why Choose Us?</h2>
                <p class="revolutionary-text">
                    Evolutionary electric
                    <span class="arrow-line">&rarr;</span>
                    <br>
                    vechile charging stations that<br>
                    are faster & more efficient.
                </p>
                <div class="why-choose-us-layout">

                    <div class="main-image-container">
                        <p class="revolution-statement">
                        We revolutionize EV charging,<br>
                        offering rapid charging capabilities,<br>
                        sustainability, and a seamless user<br>
                        experience
                        </p>
                    </div>
                    <div class="small-box"></div>
                </div>             
            </div>
        </section>

        <section id="features">
            <div class="container charge-anywhere-container">
                <div class="features-list">
                    <div class="feature-item">
                        <h3>24/7 Availability</h3>
                        <p>Always-On Stations Ready Anytime, Day or Night.</p>
                    </div>
                    <div class="feature-item">
                        <h3>Fast Charging</h3>
                        <p>Get Back On The Road In Minutes, Not Hours</p>
                    </div>
                    <div class="feature-item">
                        <h3>National Coverage</h3>
                        <p>Fing Charging Whenever Your Journey Takes You.</p>
                    </div>
                    <div class="feature-item">
                        <h3>Cost-Effiecient</h3>
                        <p>Clean, Charging That's Affordable And Eco-Friendly</p>
                    </div>
                </div>
                <div class="charge-anywhere">
                    Charge Anytime,<br>
                    Anywhere with our<br>
                    <a href="#" style="color: #000; text-decoration: none; margin-top: 15px;">→</a>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="footer-col">
                        <p style="color: #bfff00; font-size: 18px; font-weight: bold;">Bring IziCharge to Your Location</p>
                    </div>
                    <div class="footer-col">
                        <h4>Navigation</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Contact</h4>
                        <p>
                            No.7. JL Sultan Agung, Guntur,<br>
                            Setiabudi, South Jakarta City,<br>
                            Jakarta 12980
                        </p>
                        <p style="margin-top: 10px;">(021-83780-48</p>
                    </div>
                </div>
                <div class="copyright">
                    2025 Charge All Right Reserved
                </div>
            </div>
        </footer>

    </body>
    </html>