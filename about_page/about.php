<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type"="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Cats of Circuit Makati</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    
    <link rel="icon" href="../header_component/cocm_logo-main.png" type="image/png" />

    <link rel="stylesheet" href="../header_component/header_style.css">
    <link rel="stylesheet" href="aboutpage_style.css">
</head>

<header id="main-header">
    <div id="Title-div">
        <div id="header" >
            <a href="/CoCM/index.php">
            <img src="../header_component/cocm_logo-main3.png"  width="80" height="70" alt="logo">
            </a>
        </div>    
        <ul class="nav-links">
            <li>
                <a href="about.php">About Us</a>
                <ul class="dropdown">
                    <li><a href="#team">Meet the Team</a></li>
                    <li><a href="mission&work.php">Mission & Work</a></li>
                    
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
                    <li><a href="../donation_page/donationpage.php">Want to donate?</a></li>
                </ul>
            </li>
        </ul>
    </div>
        <div id ="login-div">
            <a href="../login_page/login.php">
            <img src="../header_component/login_icon.png" width="30" height="30" alt="Login">
            </a>
        </div>
</header>

<body>    
<section class="about-section">
    <div class="about-container">
        <div class="about-logo">
            <img src="../images_component/cocm_logo.png" alt="Cats of Circuit Makati Logo">
        </div>
        <div class="about-content">
            <h2>About Us</h2>
            <p><span class="highlight">The Cats of Circuit Makati (CoCM)</span> was established last May 2023 for the care and assistance of cats within Circuit Makati. Filled with dedicated volunteers, our small community aims to change lives, one kibble at a time. <span class="highlight"> With the help of our volunteers, donors, and supporters, we have our feeding sessions, spay/neuter, adoptions, and medical operations.</span></p>
        </div>
        <div class="cat-paw">
            <img src="../images_component/cat-paw.png">
        </div>
    </div>
    <hr class="divider"> 
    <div class="history-container">
        <h2>What we do </h2>
        <p>The Cats of Circuit Makati's mission revolves around <span class="highlight">5 main initiatives</span>. At COCM, we are dedicated to building a healthy and safe space for our cats, ensuring that they have the proper care, love, and attention that they deserve. With a group of like-minded individuals, we work together to provide unending support for the feline community at Circuit Makati.</p>
        <div class="cat-bowl">
            <img src="../images_component/catbowl.png" alt="Cat Bowl">
        </div>
    </div>
    <div class="card-container">
        <a href="mission&work.php" class="card">
            <img src="../images_component/feed1.png" alt="Card 1">
            <label>Feeding Sessions</label>
        </a>
        <a href="mission&work.php" class="card">
            <img src="../images_component/nurture.png" alt="Card 2">
            <label>Adoption Initiatives</label>
        </a>
        <a href="mission&work.php" class="card">
            <img src="../images_component/collab.png" alt="Card 3">
            <label>Collaborations</label>
        </a>
        <a href="mission&work.php" class="card">
            <img src="../images_component/cnvr.png" alt="Card 4">
            <label>CNVR & ARV Program</label>
        </a>
        <a href="mission&work.php" class="card">
            <img src="../images_component/medical.png" alt="Card 5">
            <label>Medical Assistance</label>
        </a>
    </div>
    <div class="more-about-us">
        <h2>More about Us</h2>
        <div class="more-links">
            <div class="link-box">
                <a href="#team" class="full-width-link">
                    <img src="../images_component/banner-team.png" class="full-width">
                </a>
            </div>
            <div class="link-box">
                <a href="#mission" class="full-width-link">
                    <img src="../images_component/banner-mission.png" class="full-width">

                </a>
            </div>
        </div>
    </div>
</section>

<script>

function scrollToDonate() {
    const gamesSection = document.getElementById('DONATE');
    gamesSection.scrollIntoView({ behavior: 'smooth' });
}

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


</body>
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
</html>
