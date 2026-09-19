<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Mission & Work - Cats of Circuit Makati</title>

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
        <div id="header">
            <a href="/CoCM/index.php">
                <img src="../header_component/cocm_logo-main3.png" width="80" height="70" alt="logo">
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
            <li><a href="#services">Services</a>
                <ul class="dropdown">
                    <li><a href="../volunteer_page/volunteer_page.php">Be a Volunteer!</a></li>
                </ul>
            </li>
            <li><a href="../contact_page/contact.php">Contact Us</a></li>
            <li><a href="#support">Support Us</a>
                <ul class="dropdown">
                    <li><a href="../donation_page/donationpage.php">Want to donate?</a></li>
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
        <div>Our Mission</div>
        <div>& Work</div>
    </div>
    <hr class="divider">
</section>
    
<!-- Section 1: Feeding Sessions -->
<section class="initiative-section">
    <div class="initiative-container">
        <div class="initiative-image">
            <div class="slider-container">
                <button class="prev" onclick="changeSlide(0, -1)">&#10094;</button>
                <div class="image-container">
                    <img class="slide slide-0" src="../images_component/feed1.png">
                    <img class="slide slide-0" src="../images_component/feed2.jpg">
                    <img class="slide slide-0" src="../images_component/feed3.jpg">
                    <img class="slide slide-0" src="../images_component/feed4.jpg">
                    <div class="slide-indicators">
                        <span class="dot dot-0 active" onclick="currentSlide(0, 0)"></span>
                        <span class="dot dot-0" onclick="currentSlide(0, 1)"></span>
                        <span class="dot dot-0" onclick="currentSlide(0, 2)"></span>
                        <span class="dot dot-0" onclick="currentSlide(0, 3)"></span>
                    </div>
                </div>
                <button class="next" onclick="changeSlide(0, 1)">&#10095;</button>
            </div>
        </div>
        <div class="initiative-content">
            <h2><span class="highlight"> Feeding Sessions</span></h2>
            <p>Our volunteers feed our feline friends twice a day within Circuit Makati. Feeding sessions happen during the mornings and evenings, ensuring that our cats are healthy and well-fed with the appropriate food and water at the right amount. We usually feed our cats with a combination of dry and wet food. We heavily rely on donations for food, so please lend us a hand when you can!</p>
        </div>
    </div>
    <hr class="section-divider">
</section>

<!-- Section 2: Adoption Initiatives -->
<section class="initiative-section">
    <div class="initiative-container">
        <div class="initiative-image">
            <div class="slider-container">
                <button class="prev" onclick="changeSlide(1, -1)">&#10094;</button>
                <div class="image-container">
                    <img class="slide slide-1" src="../images_component/adopt1.png">
                    <img class="slide slide-1" src="../images_component/adopt2.jpg">
                    <img class="slide slide-1" src="../images_component/adopt3.png">
                    <img class="slide slide-1" src="../images_component/adopt4.png">
                    <div class="slide-indicators">
                        <span class="dot dot-1 active" onclick="currentSlide(1, 0)"></span>
                        <span class="dot dot-1" onclick="currentSlide(1, 1)"></span>
                        <span class="dot dot-1" onclick="currentSlide(1, 2)"></span>
                        <span class="dot dot-1" onclick="currentSlide(1, 3)"></span>
                    </div>
                </div>
                <button class="next" onclick="changeSlide(1, 1)">&#10095;</button>
            </div>
        </div>
        <div class="initiative-content">
            <h2><span class="highlight">Adoption Initiatives</span></h2>
            <p>It is our greatest wish to provide our community cats with their own loving furever homes. We believe that each of our cats deserve a responsible furparent, and a safe, comfortable home where they can receive a lifetime of love and attention that they need. Through our adoption committee, we can help you find the cat that will match your preferences. We also assist future furparents in vaccinating and spaying/neutering their cats before they go home.</p>
            <a href="../cats_page/catspage.php">
                <button class="initiative-button">Adopt a Cat!</button>
            </a>
        </div>
    </div>
    <hr class="section-divider">
</section>

<!-- Section 3: TNR Program -->
<section class="initiative-section">
    <div class="initiative-container">
        <div class="initiative-image">
            <div class="slider-container">
                <button class="prev" onclick="changeSlide(2, -1)">&#10094;</button>
                <div class="image-container">
                    <img class="slide slide-2" src="../images_component/collab1.png">
                    <img class="slide slide-2" src="../images_component/collab2.jpg">
                    <img class="slide slide-2" src="../images_component/collab3.png">
                    <img class="slide slide-2" src="../images_component/collab4.png">
                    <div class="slide-indicators">
                        <span class="dot dot-2 active" onclick="currentSlide(2, 0)"></span>
                        <span class="dot dot-2" onclick="currentSlide(2, 1)"></span>
                        <span class="dot dot-2" onclick="currentSlide(2, 2)"></span>
                        <span class="dot dot-2" onclick="currentSlide(2, 3)"></span>
                    </div>
                </div>
                <button class="next" onclick="changeSlide(2, 1)">&#10095;</button>
            </div>
        </div>
        <div class="initiative-content">
            <h2><span class="highlight">Collaborations</span></h2>
            <p>We occasionally collaborate with other like-minded volunteer groups, brands, and organizations to expand our efforts and knowledge in caring for our cats. Through these partnerships, we are able to provide food, spay and neuter programs, medical assistance, and other community events for our cats. They also allow us to raise awareness on the importance of animal welfare and responsible pet ownership, strengthening our mission and creating an environment of compassion.</p>
        </div>
    </div>
    <hr class="section-divider">
</section>

<!-- Section 4: Medical Care -->
<section class="initiative-section">
    <div class="initiative-container">
        <div class="initiative-image">
            <div class="slider-container">
                <button class="prev" onclick="changeSlide(3, -1)">&#10094;</button>
                <div class="image-container">
                    <img class="slide slide-3" src="../images_component/cnvr1.png">
                    <img class="slide slide-3" src="../images_component/cnvr2.jpg">
                    <img class="slide slide-3" src="../images_component/cnvr3.png">
                    <img class="slide slide-3" src="../images_component/cnvr4.png">
                    <div class="slide-indicators">
                        <span class="dot dot-3 active" onclick="currentSlide(3, 0)"></span>
                        <span class="dot dot-3" onclick="currentSlide(3, 1)"></span>
                        <span class="dot dot-3" onclick="currentSlide(3, 2)"></span>
                        <span class="dot dot-3" onclick="currentSlide(3, 3)"></span>
                    </div>
                </div>
                <button class="next" onclick="changeSlide(3, 1)">&#10095;</button>
            </div>
        </div>
        <div class="initiative-content">
            <h2><span class="highlight">Catch-Neuter-Vaccinate-Release Program</span></h2>
            <p>At Circuit Makati, we aim to keep the cat population in control. By spaying and neutering our community cats, we prevent overpopulation while also allowing them to live their lives healthier and safer. Neutering and spaying cats have numerous benefits, such as reducing the risk of reproductive diseases, infection, and sexually transmitted diseases; ensuring that they live longer lives. In addition to this, all neutered/spayed cats are vaccinated with the Anti-Rabies Vaccine (ARV), to keep both our volunteers and cats safe from rabies.</p>
            <button class="initiative-button">Learn More</button>
        </div>
    </div>
    <hr class="section-divider">
</section>

<!-- Section 5: Community Education -->
<section class="initiative-section">
    <div class="initiative-container">
        <div class="initiative-image">
            <div class="slider-container">
                <button class="prev" onclick="changeSlide(4, -1)">&#10094;</button>
                <div class="image-container">
                    <img class="slide slide-4" src="../images_component/medical1.png">
                    <img class="slide slide-4" src="../images_component/medical2.png">
                    <img class="slide slide-4" src="../images_component/medical3.png">
                    <img class="slide slide-4" src="../images_component/medical4.png">
                    <div class="slide-indicators">
                        <span class="dot dot-4 active" onclick="currentSlide(4, 0)"></span>
                        <span class="dot dot-4" onclick="currentSlide(4, 1)"></span>
                        <span class="dot dot-4" onclick="currentSlide(4, 2)"></span>
                        <span class="dot dot-4" onclick="currentSlide(4, 3)"></span>
                    </div>
                </div>
                <button class="next" onclick="changeSlide(4, 1)">&#10095;</button>
            </div>
        </div>
        <div class="initiative-content">
            <h2><span class="highlight">Medical Assistance</span></h2>
            <p>Living as a stray cat is not easy. It comes with many risks of accidents, diseases, infections, and injury. We are constantly advocating for the health and safety of our beloved felines by providing them with medical care. With our trusted veterinarian clinics, we are able to relieve ailments and conditions from vehicle accidents, viruses, to simple colds. We make sure that our cats receive the care and attention that they deserve. If you are interested in fostering some of our cats that are in need of medical care, please reach out to us on any of our social media accounts.</p>
            <button class="initiative-button">Medical Recoveries & Updates</button>
        </div>
    </div>
</section>

    <script>
                // Array to store the current slide index for each slider
            const slideIndices = [0, 0, 0, 0, 0];

        // Initialize all sliders when the page loads
        window.onload = function() {
            for (let i = 0; i < 5; i++) {
                showSlide(i, 0);
            }
        };

        // Function to change slides
        function changeSlide(sliderIndex, direction) {
            showSlide(sliderIndex, slideIndices[sliderIndex] + direction);
        }

        // Function to show a specific slide
        function currentSlide(sliderIndex, n) {
            showSlide(sliderIndex, n);
        }

        // Function to display the selected slide
        function showSlide(sliderIndex, n) {
            const slides = document.querySelectorAll(`.slide-${sliderIndex}`);
            const dots = document.querySelectorAll(`.dot-${sliderIndex}`);
            
            // Handle index wrapping
            if (n >= slides.length) {n = 0}
            if (n < 0) {n = slides.length - 1}
            
            // Update the current slide index
            slideIndices[sliderIndex] = n;
            
            // Hide all slides
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dots[i].className = dots[i].className.replace(" active", "");
            }
            
            // Show the selected slide
            slides[n].style.display = "block";
            dots[n].className += " active";
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