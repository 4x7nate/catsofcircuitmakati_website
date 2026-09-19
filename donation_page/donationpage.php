<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate - Cats of Circuit Makati</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    
    <link rel="icon" href="../header_component/cocm_logo-main.png" type="image/png" />

    <link rel="stylesheet" href="../header_component/header_style.css">
    <link rel="stylesheet" href="donationpage_style.css">
</head>

<header id="main-header">
    <div id="Title-div">
        <div id="header">
            <a href="/CoCM/index.php">
                <img src="../header_component/cocm_logo-main3.png" width="80" height="70" alt="logo">
            </a>
        </div>    
        <ul class="nav-links">
            <li>
                <a href="../about_page/about.php">About Us</a>
                <ul class="dropdown">
                    <li><a href="#team">Meet the Team</a></li>
                    <li><a href="../about_page/mission&work.php">Mission & Work</a></li>
                    
                </ul>
            </li>
            
            <li><a href="../cats_page/catspage.php">Cats</a></li>
            <li><a>Services</a>
                <ul class="dropdown">
                    <li><a href="../volunteer_page/volunteer_page.php">Be a Volunteer!</a></li>
                </ul>
            </li>
            <li><a href="../contact_page/contact.php">Contact Us</a></li>
            <li><a>Support Us</a>
                <ul class="dropdown">
                    <li><a href="../donation_page/donate.php">Want to donate?</a></li>
                </ul>
            </li>
        </ul>

    </div>
    <div id="login-div">
        <a href="../login_page/login.php">
            <img src="../header_component/login_icon.png" width="30" height="30" alt="Login">
        </a>
    </div>
</header>

<body>

<section>
    <div id="main_title">
        <div>Want to donate?</div>
    </div>
    <hr class="divider">
</section>

<section class="donation-section">
    <h2>Thank you for your interest in donating! We accept donations through the following:</h2>
</section>

<section>
    <div class="donation-container">
        <h2>What can I donate?</h2>
        <p class="instructions">
            We accept monetary, dry and wet food, cat litter, toys, cat furniture, medicine, and supplements. However big or small, our feline friends will definitely appreciate them!
        </p>
    </div>
</section>
    <hr class="section-divider">
<section>
    <div class="donation-container">
        <h2>For online monetary donations:</h2>
        <div class="qr-section">
            <div class="qr-box">
                <img src="../images_component/gcash-qr.jpg" alt="GCash QR Code">
                <p class="name">Isabella Francesca A.</p>
                <p class="number">09*****2348</p>
                <p class="platform">GCash</p>
            </div>
            <div class="qr-box">
                <img src="../images_component/paypal-qr.jpg" alt="PayPal QR Code">
                <br><br><br><br><br>
                <p class="platform">PayPal</p>
            </div>
        </div>
        <p class="instructions">
            For GCash please scan the QR code or send to <span class="highlight">09271342348</span>.
            For PayPal, scan the QR code or send to this <a href="#" class="link">account</a>.
        </p>
    </div>
</section>
    <hr class="section-divider">
<section>
    <div class="donation-container">
        <h2>For food, toys, litter, and other item deliveries:</h2>
        <p class="instructions">
            Please drop-off the delivery at this address: <span class="highlight">Solstice Tower 1, Gallery Drive, Brgy. Carmona, Circuit Makati, Makati City, 1630 Metro Manila, Philippines.</span><br><br>
            Afterwards, please let us know when you have sent a delivery. We can also do a meetup at the provided location.
        </p>
    </div>
</section>
    

    <script>
        let lastScrollTop = 0;
        let scrollTimeout;

        window.addEventListener('scroll', function() {
            const header = document.getElementById('main-header');
            const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (currentScroll > lastScrollTop) {
                // Scrolling down
                header.classList.remove('returned');
                header.classList.add('scrolled');
            } else {
                // Scrolling up
                header.classList.remove('scrolled');
                header.classList.add('returned');
            }

            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling

            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(() => {
                if (currentScroll > lastScrollTop) {
                    header.classList.remove('returned');
                    header.classList.add('scrolled');
                }
            }, 200); 
        });
    </script>

    <footer>
        <div id="Footer-div" align="center">
            <!-- Social Media Icons -->
            <a href="https://www.facebook.com/thecatsofcircuitmakati/" target="_blank" class="social-icon">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/thecatsofcircuitmakati/" target="_blank" class="social-icon">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.tiktok.com/@catscircuitmakati_" target="_blank" class="social-icon">
                <i class="fa-brands fa-tiktok"></i>
            </a>
            THE CATS OF CIRCUIT MAKATI &copy 2023
        </div>
    </footer>
</body>
</html>