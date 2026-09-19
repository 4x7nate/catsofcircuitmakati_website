<?php
include "../admin-dashboard_page/db.php";

// Fetch images from the database
$sql = "SELECT * FROM images ORDER BY uploaded_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Our Cats</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    
    <link rel="stylesheet" href="../homepage_component/homepage_style.css">
    <link rel="stylesheet" href="../homepage_component/homepage_media_queries.css">
    <link rel="stylesheet" href="../header_component/header_style.css">
    <link rel="stylesheet" href="catspage_style.css">
    
</head>

<header id="main-header">
        <div id="Title-div">
            <a href="/CoCM/index.php">
                <img src="../header_component/cocm_logo-main3.png" width="80" height="70" alt="logo">
            </a>
            <ul class="nav-links">
            <li>
                <a href="../about_page/about.php">About Us</a>
                <ul class="dropdown">
                    <li><a href="#team">Meet the Team</a></li>
                    <li><a href="../about_page/mission&work.php">Mission & Work</a></li>
                    
                </ul>
            </li>
            
            <li><a href="catspage.php">Cats</a></li>
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
    <section>
        <div id="main_title">
            <div>Our Cats</div>
        </div>
        <hr class="divider">
    </section>
    
    <section id="cats-intro" class="cats-intro">
        <h1>Meet Our Cats</h1>
        <p>These adorable cats are looking for a loving home. Learn more and consider adopting!</p>
    </section>
    <hr class="section-divider">

    <section class="cats-grid">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <div class="cat-container">
            <img src="../admin-dashboard_page/uploads/<?php echo htmlspecialchars($row['filename']); ?>" alt="Cat" class="cat-image">
            
            <div class="cat-name">
                <?php echo htmlspecialchars($row['cat_name'] ?? 'Unknown'); ?> - <?php echo htmlspecialchars($row['gender'] ?? 'Unknown'); ?>
            </div>
            
            <div class="cat-description">
                <?php echo htmlspecialchars($row['caption']); ?>
            </div>
            
            <div class="cat-details">
                Age - <?php echo htmlspecialchars($row['age'] ?? 'Unknown'); ?>
            </div>
            
            <div class="cat-details">
                Spay/Neuter - <?php echo htmlspecialchars($row['spay_neuter'] ?? 'Unknown'); ?>
            </div>
            
            <div class="cat-details">
                ARV - <?php echo htmlspecialchars($row['arv'] ?? 'Unknown'); ?>
            </div>
        </div>
        <?php endwhile; ?>
    </section>
<section>
    <div class="button-container">
            <button class="adoption-button" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLSd2zANjnOG-3ox13fkUOcfXzOa4E6BxWl0YxBK9wBD0xxhiXw/viewform'">Adoption Form</button>
        </div>
</section>
</body>
    <footer>
        <div id="Footer-div" align="center">
            <a href="https://www.facebook.com/thecatsofcircuitmakati/" target="_blank" class="social-icon">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/thecatsofcircuitmakati/" target="_blank" class="social-icon">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.tiktok.com/@catscircuitmakati_" target="_blank" class="social-icon">
                <i class="fa-brands fa-tiktok"></i>
            </a>
            <p>THE CATS OF CIRCUIT MAKATI &copy; 2023</p>
        </div>
    </footer>
</html>

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
        }, 200); // Adjust the delay as needed
    });
    
</script>